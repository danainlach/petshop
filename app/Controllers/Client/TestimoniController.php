<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\Member;
use App\Models\Prosev;

class TestimoniController extends BaseController
{
    public function showTestimonial()
    {
        $models = [
            'member' => new Member(),
            'prosev' => new Prosev()
        ];

        $data = [
            'title' => 'Testimonial',
            'id_page' => 4,
            'member_total' => $models['member']->countAllResults(),
            'product_total' => $models['prosev']->where('prosev_category', 'Product')->countAllResults(),
            'service_total' => $models['prosev']->where('prosev_category', 'Service')->countAllResults(),
        ];

        return view('clients/testimonial', $data);
    }
}
