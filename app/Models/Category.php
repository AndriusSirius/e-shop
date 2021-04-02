<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $guarded = [];

    protected $fillable = [
        'id',
        'name',
        'link',
        'nr',
        'parent_id'

    ];
    public function subcategories(){

        return $this->hasMany('App\Models\Category', 'parent_id');

    }
}
