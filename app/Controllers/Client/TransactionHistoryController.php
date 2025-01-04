<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Controllers\Server\DeleteController;
use App\Models\OrderTransaction;

class TransactionHistoryController extends BaseController
{
    public function showTransaction()
    {
        $order_transaction = new OrderTransaction();
        $data = [
            'title' => 'Transaction History',
            'id_page' => 12,
            'transactions' => $order_transaction->getTransaction(),
        ];

        return view('clients/transaction', $data);
    }

    public function delete($transaction_id)
    {
        $delete_control = new DeleteController();
        $deleteFunc = $delete_control->delete_transaction($transaction_id);

        return $deleteFunc;
    }
}
