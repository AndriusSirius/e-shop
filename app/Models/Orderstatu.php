<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderstatu extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];
}
