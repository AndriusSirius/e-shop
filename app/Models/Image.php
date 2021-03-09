<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'products_id',
        'path'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'products_id');
    }
}
