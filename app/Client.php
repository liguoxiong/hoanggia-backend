<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'description_en',
        'description_vi',
        'image',
        'link',
        'created_at',
        'updated_at'
    ];
}
