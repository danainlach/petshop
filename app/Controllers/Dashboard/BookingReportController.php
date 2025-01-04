<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\OrderTransaction;

class BookingReportController extends BaseController
{
    public function showBooking()
    {
        $transaction = new OrderTransaction();
        $data = [
            'title' => 'Booking Report',
            'id_page' => 10,
            'transactions' => $transaction->getUserTransaction()
        ];

        return view('clients/dashboard/booking_report', $data);
    }
}
