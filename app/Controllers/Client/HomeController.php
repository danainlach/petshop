<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function showHome()
    {
        $data = [
            'title' => 'Home',
            'id_page' => 1
        ];

        return view('clients/home', $data);
    }
}
