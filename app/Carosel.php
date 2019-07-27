<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carosel extends Model
{
    protected $fillable = [
        'name_en',
        'name_vi',
        'description_en',
        'description_vi',
        'image',
    ];
}
