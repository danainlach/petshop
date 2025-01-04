<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\Prosev;

class PetCenterController extends BaseController
{
    public function showPetshopCenter()
    {
        $prosev = new Prosev();
        $data = [
            'title' => 'Petshop Center',
            'id_page' => 2,
            'prosevs' => $prosev->orderBy('prosev_id', 'DESC')->findAll(),
            'prosev_count' => $prosev->countAllResults(),
        ];

        return view('clients/petshop_center', $data);
    }

    public function detail($prosev_id)
    {
        $prosev = new Prosev();
        $data = [
            'title' => 'Detail',
            'id_page' => 'none',
            'prosev' => $prosev->find($prosev_id),
        ];

        return view('clients/detail', $data);
    }

    public function checkout($prosev_id)
    {
        $prosev = new Prosev();
        $data = [
            'title' => 'Checkout',
            'id_page' => 'none',
            'prosev' => $prosev->find($prosev_id)
        ];

        return view('clients/checkout', $data);
    }
}
