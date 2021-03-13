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

    public function products(){
        return $this->hasMany(Product::class, 'id');
    }
    public function users(){
        return $this->hasMany(User::class, 'id');
    }
    public function images(){
        return $this->hasMany(Image::class, 'id');
    }
}
