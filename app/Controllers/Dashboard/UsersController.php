<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Controllers\Server\CreateController;
use App\Controllers\Server\DeleteController;
use App\Controllers\Server\UpdateController;
use App\Models\Member;

class UsersController extends BaseController
{
    public function showUsers()
    {
        $member = new Member();
        $data = [
            'title' => 'Users Management',
            'id_page' => 6,
            'members' => $member->orderBy('user_id', 'DESC')->findAll(),
        ];

        return view('clients/dashboard/users', $data);
    }

    public function create()
    {
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $create_control = new CreateController();
        $createFunc = $create_control->create_user($username, $email);

        return $createFunc;
    }

    public function delete($id)
    {
        $user_id = $id;

        $delete_control = new DeleteController();
        $deleteFunc = $delete_control->delete_user($user_id);

        return $deleteFunc;
    }

    public function update($id)
    {
        $user_id = $id;
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');

        $update_control = new UpdateController();
        $updateFunc = $update_control->update_user($user_id, $username, $email);

        return $updateFunc;
    }
}
