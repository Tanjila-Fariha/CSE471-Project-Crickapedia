<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'cricproducts';

    protected $fillable = [
        'product_name',
        'brand',
        'product_type',
        'price',
        'product_details',
        'picture',
    ];
}
