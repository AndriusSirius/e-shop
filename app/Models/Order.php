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
        'id',
        'user_id',
        'status_id',
        'shipping',
        'content',
        'total_cost',
        'created_at',
        'updated_at'
    ];

    public function status()
    {
        return $this->belongsTo(Orderstatu::class, 'status_id');
    }

    public function ordering()
    {
        return $this->hasMany(Ordering::class, 'order_nr');
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
