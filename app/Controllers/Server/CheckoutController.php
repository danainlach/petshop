<?php

namespace App\Controllers\Server;

use App\Controllers\BaseController;
use App\Models\OrderTransaction;
use App\Models\Prosev;

class CheckoutController extends BaseController
{
    public function pay($prosev_id)
    {
        $transaction = new OrderTransaction();
        $prosev_model = new Prosev();
        $prosev = $prosev_model->find($prosev_id);
        $input_price = $this->request->getVar('amount');
        $purchase_stock = $this->request->getVar('stock');
        $total_amount = $purchase_stock * $prosev['prosev_price'];

        if ($prosev['prosev_category'] == 'Product') {
            if ($prosev['prosev_stock'] >= $purchase_stock) {
                if ($input_price >= $total_amount) {
                    $transaction->insert([
                        'user_id' => session('user_id'),
                        'prosev_id' => $prosev_id,
                        'stock' => $this->request->getVar('stock'),
                        'amount' => $input_price
                    ]);

                    $prosev_model->update($prosev_id, [
                        'prosev_stock' => $prosev['prosev_stock'] - $this->request->getVar('stock'),
                    ]);

                    return redirect()->to(base_url('/transaction_history'))->with('success', 'Success');
                } else {
                    return redirect()->back()->with('error', 'Uang anda kurang! Jumlah Tagihan (Permintaan Stock * Harga Product).');
                }
            } else {
                return redirect()->back()->with('error', 'Maaf stock yang anda masukkan tidak sesuai dengan stock yang kami miliki.');
            }
        } elseif ($prosev['prosev_category'] == 'Service') {
            if ($input_price >= $prosev['prosev_price']) {
                $transaction->insert([
                    'user_id' => session('user_id'),
                    'prosev_id' => $prosev_id,
                    'stock' => $this->request->getVar('stock'),
                    'amount' => $input_price
                ]);

                $prosev_model->update($prosev_id, [
                    'prosev_stock' => $prosev['prosev_stock'] - $this->request->getVar('stock'),
                ]);

                return redirect()->to(base_url('/transaction_history'))->with('success', 'Success');
            } else {
                return redirect()->back()->with('error', 'Uang anda kurang! Bayar sesuai harga yang sudah ditetapkan.');
            }
        }
    }
}
