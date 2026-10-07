<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'product_name',
        'category',
        'quantity',
        'selling_price',
        'unit'
    ];

    protected $casts = [
        'selling_price' => 'decimal:2'
    ];
}
