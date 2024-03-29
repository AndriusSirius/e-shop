<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'product_category';
    protected $fillable = [
        'products_id',
        'categories_id'
    ];
}
