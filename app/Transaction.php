<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    function transactionType()
    {
        return $this->belongsTo(TransactionType::class);
    }
}
