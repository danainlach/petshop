<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prosev extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'prosev_id' => [
                'type'  => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'prosev_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'prosev_price' => [
                'type' => 'BIGINT',
                'constraint' => 20,
            ],
            'prosev_desc' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'prosev_img' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'prosev_stock' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'prosev_category' => [
                'type' => 'ENUM',
                'constraint' => ['Product', 'Service'],
            ],
        ]);

        $this->forge->addPrimaryKey('prosev_id');
        $this->forge->createTable('prosev');
    }


    public function down()
    {
        $this->forge->dropTable('prosev');
    }
}
