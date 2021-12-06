<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'title',
        'summary',
        'model',
        'price',
        'quantity',
        'content',
        'type',
        'product_sign',
        'color',
        'energy',
        'warranty',
        'created_at',
        'updated_at'
    ];

    public function images(){
        return $this->hasMany(Image::class, 'products_id');
    }

    public function all_discounts(){
        return $this->hasMany(Discounts::class, 'products_id');
    }

    public function discount(){
        return $this->hasOne(Discounts::class, 'products_id')
            ->where('from', '<=', Carbon::today()->toDateString())
            ->where('to', '>=', Carbon::today()->toDateString())
            ->orderByDesc('percentage');
    }


    public function activeDiscount(){
        return $this->hasMany(Discounts::class, 'products_id')
            ->where('from', '<=', Carbon::today()->toDateString())
            ->where('to', '>=', Carbon::today()->toDateString());
    }

    public function cart(){
        return $this->hasMany(Cart::class, 'products_id');
    }
    public function specs(){
        return $this->hasMany(Specs::class, 'products_id');
    }
}
