<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_image',
        'product_name',
        'product_description',
        'product_price',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function transactionDetail(){
        return $this->hasMany(TransactionDetail::class);
    }

}
