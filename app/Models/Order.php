<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'user_id',
        'products_id',
        'carts_id',
        'status',
        'item_discount',
        'shipping',
        'total',
        'created_at',
        'updated_at'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'carts_id');
    }
    public function discounts()
    {
        return $this->hasMany(Discounts::class, 'products_id', 'products_id');
    }

}
