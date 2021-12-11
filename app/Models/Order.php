<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'user_id',
        'products_id',
        'order_nr',
        'status',
        'shipping',
        'total',
        'content',
        'created_at',
        'updated_at'
    ];

    public function ordering()
    {
        return $this->belongsTo(Ordering::class, 'order_nr');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function discount()
    {
        return $this->hasOne(Discounts::class, 'products_id', 'products_id')
            ->where('from', '<=', Carbon::today()->toDateString())
            ->where('to', '>=', Carbon::today()->toDateString())
            ->orderByDesc('percentage');
    }

}
