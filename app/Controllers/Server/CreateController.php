<?php

namespace App\Controllers\Server;

use App\Controllers\BaseController;
use App\Models\Member;
use App\Models\Prosev;

class CreateController extends BaseController
{
    public function create_user($username, $email)
    {
        $member = new Member();
        $email_member = $member->where('email', $email)->first();

        if ($email_member == false) {
            $member->insert([
                'username' => $username,
                'email' => $email,
                'password' => password_hash($username, PASSWORD_DEFAULT),
            ]);
            return redirect()->back()->with('success', 'Successfully created an user account');
        }
        return redirect()->back()->with('error', 'This email account already existed');
    }

    public function create_prosev($data)
    {
        $prosev = new Prosev();

        $prosev_img = $data['prosev_img'];
        $newNameImg = $prosev_img->getRandomName();

        $prosev_img->move(ROOTPATH . 'public/prosev/', $newNameImg);

        $prosev->insert([
            'prosev_name'       => $data['prosev_name'],
            'prosev_price'      => $data['prosev_price'],
            'prosev_desc'       => $data['prosev_desc'],
            'prosev_stock'      => $data['prosev_stock'],
            'prosev_img'        => $newNameImg,
            'prosev_category'   => $data['prosev_category']
        ]);

        return redirect()->back()->with('success', 'Successfully created the prosev');
    }
}
