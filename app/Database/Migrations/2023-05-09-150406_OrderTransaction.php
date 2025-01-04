<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderTransaction extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'transaction_id' => [
                'type'  => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'prosev_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'stock' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'amount' => [
                'type' => 'BIGINT',
                'constraint' => 20,
            ]
        ]);

        $this->forge->addPrimaryKey('transaction_id');
        $this->forge->createTable('order_transaction');
    }


    public function down()
    {
        $this->forge->dropTable('order_transaction');
    }
}
