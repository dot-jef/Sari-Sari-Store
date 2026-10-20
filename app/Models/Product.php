<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
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
