<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'  => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'role' => [
                'type' => 'ENUM("member")',
                'default' => 'member',
            ],
        ]);

        $this->forge->addPrimaryKey('user_id');
        $this->forge->createTable('member');
    }


    public function down()
    {
        $this->forge->dropTable('member');
    }
}
