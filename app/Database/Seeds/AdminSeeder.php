<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'Admin Gaoel',
                'email'    => 'laianeville8@gmail.com',
                'password' => password_hash('123neville456', PASSWORD_DEFAULT),
                'role'     => 'admin'
            ]
        ];

        $this->db->table('admin')->insertBatch($data);
    }
}
