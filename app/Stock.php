<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
