<?php

namespace App;

use App\Category;
use App\Transaction;
use App\Seller;
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
    // relasi ke kategori
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    // relasi ke Transaction
    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
    // relasi ke seller
    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
