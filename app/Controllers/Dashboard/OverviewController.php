<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Member;
use App\Models\OrderTransaction;
use App\Models\Prosev;

class OverviewController extends BaseController
{
    public function showOverview()
    {
        $models = [
            'member' => new Member(),
            'order_transaction' => new OrderTransaction(),
            'prosev' => new Prosev(),
            'member' => new Member(),
        ];

        $data = [
            'title' => 'Overview',
            'id_page' => 5,
            'member_total' => $models['member']->countAllResults(),
            'orderTransaction_total' => $models['order_transaction']->selectSum('amount')->get()->getResultArray(),
            'product_total' => $models['prosev']->where('prosev_category', 'Product')->countAllResults(),
            'service_total' => $models['prosev']->where('prosev_category', 'Service')->countAllResults(),
            'members' => $models['member']->orderBy('user_id', 'DESC')->findAll(),
            'prosevs' => $models['prosev']->findAll(),
        ];

        // dd($data['orderTransaction_total'][0]['amount']);
        return view('clients/dashboard/overview', $data);
    }
}
