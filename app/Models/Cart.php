<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'user_id',
        'products_id',
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
    public function images()
    {
        return $this->hasMany(Image::class, 'products_id', 'products_id');
    }
}
