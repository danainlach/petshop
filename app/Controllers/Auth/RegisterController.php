<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Member;

class RegisterController extends BaseController
{
    public function showRegister()
    {
        $data = [
            'title' => 'Register',
            'id_page' => 'auth2'
        ];

        return view('clients/auth/register', $data);
    }

    public function handleRegister()
    {
        $member = new Member();
        $confirm_password = $this->request->getVar('confirm_password');
        $password = $this->request->getVar('password');

        if ($confirm_password == $password) {
            $member->insert([
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);

            return redirect()->to(base_url('/login'))->with('success', 'Your account has been created!');
        }

        return redirect()->back()->with('error', 'Password not matching');
    }
}
