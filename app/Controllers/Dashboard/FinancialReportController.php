<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\OrderTransaction;

class FinancialReportController extends BaseController
{
    public function showFinancial()
    {
        $transaction = new OrderTransaction();
        $data = [
            'title' => 'Financial Report',
            'id_page' => 11,
            'income_total' => $transaction->selectSum('amount')->get()->getResultArray(),
            'transactions' => $transaction->getUserTransaction(),
        ];

        return view('clients/dashboard/financial_report', $data);
    }
}
