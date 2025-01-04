<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Admin;
use App\Models\Member;

class LoginController extends BaseController
{
    public function showLogin()
    {
        $data = [
            'title' => 'Login',
            'id_page' => 'auth1',
        ];

        return view('clients/auth/login', $data);
    }


    public function handleLogin()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $admin_model = new Admin();
        $member_model = new Member();

        $member = $member_model->where('email', $email)->first();
        $admin = $admin_model->where('email', $email)->first();

        if ($admin) {
            $passwordVerify = password_verify($password, $admin['password']);
            if ($passwordVerify) {
                session()->set([
                    'user_id' => $admin['user_id'],
                    'username' => $admin['username'],
                    'email' => $admin['email'],
                    'role'  => $admin['role'],
                    'isLoggedIn' => true
                ]);

                return redirect()->to(base_url('/overview'));
            } else {
                return redirect()->to('/login')->with('error', 'Email or password incorrect!');
            }
        } elseif ($member) {
            $passwordVerify = password_verify($password, $member['password']);
            if ($passwordVerify) {
                session()->set([
                    'user_id' => $member['user_id'],
                    'username' => $member['username'],
                    'email' => $member['email'],
                    'role' => $member['role'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to(base_url('/petshop_center'))->with('success', 'Logged in successfully');
            } else {
                return redirect()->to('/login')->with('error', 'Email or password incorrect!');
            }
        } else {
            return redirect()->back()->with('error', 'Your account was not found');
        }
    }
}
