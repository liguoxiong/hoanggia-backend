<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'header_en',
        'header_vi',
        'feature_title_en',
        'feature_title_vi',
        'feature_description_en',
        'feature_description_vi',
        'service_description_en',
        'service_description_vi',
        'distributor_title_en',
        'distributor_title_vi',
        'distributor_description_en',
        'distributor_description_vi',
        'product_description_en',
        'product_description_vi',
        'clients_description_en',
        'clients_description_vi',
    ];
}
