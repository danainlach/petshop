<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'username',
        'email',
        'password',
        'role'
    ];
}
