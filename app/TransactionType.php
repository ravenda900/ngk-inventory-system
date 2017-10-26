<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
