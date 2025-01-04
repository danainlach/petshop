<?php

namespace App\Models;

use CodeIgniter\Model;

class Prosev extends Model
{
    protected $table = 'prosev';
    protected $primaryKey = 'prosev_id';
    protected $allowedFields = [
        'prosev_name',
        'prosev_price',
        'prosev_desc',
        'prosev_img',
        'prosev_stock',
        'prosev_category'
    ];
}
