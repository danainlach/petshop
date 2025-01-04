<?php

namespace App\Controllers\Server;

use App\Controllers\BaseController;
use App\Models\Member;
use App\Models\Prosev;

class UpdateController extends BaseController
{
    public function update_user($user_id, $username, $email)
    {
        $member = new Member();
        $email_member = $member->where('email', $email)->first();
        $def_data = $member->where('user_id', $user_id)->select(['username', 'email'])->findAll();
        $def_username = $def_data[0]['username'];
        $def_email = $def_data[0]['email'];

        if ($def_username != $username || $def_email != $email) {
            if ($def_email == $email || $email_member == false) {
                $member->update($user_id, [
                    'username'  => $username,
                    'email'     => $email,
                    'password'  => password_hash($username, PASSWORD_DEFAULT),
                ]);
                return redirect()->back()->with('success', 'The user account has been updated');
            } else {
                return redirect()->back()->with('error', 'The email account already exist');
            }
        }

        return redirect()->back()->with('info', 'No data has been updated');
    }

    public function update_prosev($prosev_id, $data)
    {
        $prosev = new Prosev();

        if (!empty($_FILES['prosev_img']['name'])) {
            // Jika ada gambar yang diunggah, simpan gambar dan ambil nama file
            $prosev_img = $data['prosev_img'];
            $image = $prosev_img->getRandomName();
            $prosev_img->move(ROOTPATH . 'public/prosev/', $image);
        } else {
            // Jika tidak ada gambar yang diunggah, gunakan gambar lama
            $prosevData = $prosev->where('prosev_id', $prosev_id)->first();
            $image = $prosevData['prosev_img'];
        }

        $prosev->update($prosev_id, [
            'prosev_name' => $data['prosev_name'],
            'prosev_price' => $data['prosev_price'],
            'prosev_desc' => $data['prosev_desc'],
            'prosev_stock' => $data['prosev_stock'],
            'prosev_img'    => $image,
        ]);

        return redirect()->back()->with('success', 'The prosev has been updated');
    }
}
