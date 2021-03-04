<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

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
        'parent_id'

    ];
    public function subcategory(){

        return $this->hasMany('App\Models\Category', 'parent_id');

    }
}
