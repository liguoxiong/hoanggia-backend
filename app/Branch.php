<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name',
        'description_en',
        'description_vi',
        'image',
        'link'
    ];
}
