<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Untuk handle status karena hanya 2 pilihan
    const AVAILABLE_PRODUCT ='available';
    const UNAVAILABLE_PRODUCT ='unavailable';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id',
    ];
    // buat method jika available
    public function isAvailable(){
        return $this->status == Product::AVAILABLE_PRODUCT;
    }
}
