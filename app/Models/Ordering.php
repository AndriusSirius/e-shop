<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordering extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'products_id',
        'order_nr',
        'total',
        'created_at',
        'updated_at',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

}
