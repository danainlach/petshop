<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\Prosev;

class ServiceController extends BaseController
{
    public function showServices()
    {
        $prosev = new Prosev();
        $data = [
            'title' => 'Services',
            'id_page' => 3,
            'services' => $prosev->orderBy('prosev_id', 'DESC')->where('prosev_category', 'Service')->findAll(),
            'service_count' => $prosev->where('prosev_category', 'service')->countAllResults(),
        ];

        return view('clients/services', $data);
    }
}
