<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Controllers\Server\CreateController;
use App\Controllers\Server\DeleteController;
use App\Controllers\Server\UpdateController;
use App\Models\Prosev;

class ProsevController extends BaseController
{
    public function showProducts()
    {
        $prosev_model = new Prosev();
        $data = [
            'title' => 'Products Management',
            'id_page' => 7,
            'prosevs' => $prosev_model->orderBy('prosev_id', 'DESC')->where('prosev_category', 'Product')->findAll(),
            'product_total' => $prosev_model->where('prosev_category', 'Product')->countAllResults(),   
        ];

        return view('clients/dashboard/prosev', $data);
    }

    public function showServices()
    {
        $prosev_model = new Prosev();
        $data = [
            'title' => 'Services Management',
            'id_page' => 8,
            'prosevs' => $prosev_model->orderBy('prosev_id', 'DESC')->where('prosev_category', 'Service')->findAll(),
        ];

        return view('clients/dashboard/prosev', $data);
    }

    public function create_prosev()
    {
        $data = [
            'prosev_name'       => $this->request->getVar('prosev_name'),
            'prosev_price'      => $this->request->getVar('prosev_price'),
            'prosev_desc'       => $this->request->getVar('prosev_desc'),
            'prosev_stock'      => $this->request->getVar('prosev_stock'),
            'prosev_img'        => $this->request->getFile('prosev_img'),
            'prosev_category'   => $this->request->getVar('prosev_category'),
        ];

        $create_control = new CreateController();
        $createFunc = $create_control->create_prosev($data);

        return $createFunc;
    }

    public function delete_prosev($id)
    {
        $prosev_id = $id;

        $delete_control = new DeleteController();
        $deleteFunc = $delete_control->delete_prosev($prosev_id);

        return $deleteFunc;
    }

    public function update_prosev($prosev_id)
    {
        $prosev_id = $prosev_id;
        $data = [
            'prosev_name'       => $this->request->getVar('prosev_name'),
            'prosev_price'      => $this->request->getVar('prosev_price'),
            'prosev_desc'       => $this->request->getVar('prosev_desc'),
            'prosev_stock'      => $this->request->getVar('prosev_stock'),
            'prosev_img'        => $this->request->getFile('prosev_img')
        ];
        $update_control = new UpdateController();
        $updateFunc = $update_control->update_prosev($prosev_id, $data);

        return $updateFunc;
    }
}
