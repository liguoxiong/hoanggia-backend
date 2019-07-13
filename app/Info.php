<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'company_name_en',
        'company_name_vi',
        'address_en',
        'address_vi',
        'email',
        'phone',
        'facebook',
        'youtube',
        'twitter',
        'likedin',
    ];
}
