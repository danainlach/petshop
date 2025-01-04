<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class LogoutController extends BaseController
{
    public function handleLogout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
