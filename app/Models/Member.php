<?php

namespace App\Models;

use CodeIgniter\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'username',
        'email',
        'password',
        'role'
    ];
}
