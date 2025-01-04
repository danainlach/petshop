<?php

namespace App\Controllers\Server;

use App\Controllers\BaseController;
use App\Models\Member;
use App\Models\OrderTransaction;
use App\Models\Prosev;

class DeleteController extends BaseController
{
    public function delete_user($user_id)
    {
        $member = new Member();
        $member->where('user_id', $user_id);
        $member->delete();

        return redirect()->back()->with('warning', 'The user account has been deleted.');
    }

    public function delete_prosev($prosev_id)
    {
        $prosev = new Prosev();
        $prosev->where('prosev_id', $prosev_id);
        $prosev->delete();

        return redirect()->back()->with('warning', 'The prosev has been deleted.');
    }

    public function delete_transaction($transaction_id)
    {
        $transaction = new OrderTransaction();
        $transaction->where('transaction_id', $transaction_id);
        $transaction->delete();

        return redirect()->back()->with('warning', 'The transaction has been deleted.');
    }
}
