<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'title',
        'summary',
        'type',
        'price',
        'quantity',
        'content',
        'created_at',
        'updated_at'

    ];

    public function images(){
        return $this->hasMany(Image::class, 'products_id');
    }

    public function discounts(){
        return $this->hasMany(Discounts::class, 'products_id');
    }

    public function cart(){
        return $this->hasMany(Cart::class, 'products_id');
    }
}
