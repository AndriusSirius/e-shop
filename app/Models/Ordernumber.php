<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordernumber extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
    ];
}
