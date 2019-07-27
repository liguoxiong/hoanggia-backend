<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_en',
        'name_vi',
        'description_en',
        'description_vi',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
