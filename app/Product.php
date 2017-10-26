<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
