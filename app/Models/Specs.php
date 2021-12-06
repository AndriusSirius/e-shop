<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specs extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_id',
        'specs_key',
        'value',
    ];
    public function product(){
        return $this->belongsToMany(Product::class, 'products_id');
    }
}
