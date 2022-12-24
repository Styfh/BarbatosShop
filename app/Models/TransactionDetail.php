<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'transaction_id',
        'quantity'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function transactionHeader(){
        return $this->belongsTo(TransactionHeader::class, 'transaction_id', 'id');
    }
}
