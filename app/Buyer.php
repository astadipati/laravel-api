<?php

namespace App;
use App\Transaction;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
