<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\OrderTransaction;

class SalesController extends BaseController
{
    public function showSales()
    {
        $transaction = new OrderTransaction();
        $data = [
            'title' => 'Sales Report',
            'id_page' => 9,
            'transactions' => $transaction->getUserTransaction(),
        ];

        return view('clients/dashboard/sales_report', $data);
    }
}
