<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderTransaction extends Model
{
    protected $table = 'order_transaction';
    protected $primaryKey = 'transaction_id';
    protected $allowedFields = [
        'user_id',
        'prosev_id',
        'stock',
        'amount'
    ];

    public function getTransaction()
    {
        return $this->db->table('order_transaction')->where('user_id', session('user_id'))->join('prosev', 'prosev.prosev_id=order_transaction.prosev_id')->get()->getResultArray();
    }

    public function getUserTransaction()
    {
        return $this->db->table('order_transaction')->join('prosev', 'prosev.prosev_id=order_transaction.prosev_id')->join('member', 'member.user_id=order_transaction.user_id')->select(['transaction_id', 'username', 'stock', 'amount', 'prosev_name', 'prosev_category', 'stock'])->get()->getResultArray();
    }
}
