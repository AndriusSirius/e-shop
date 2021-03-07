<?php

namespace App\Http\Controllers;

use App\Models\Discounts;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home()
    {
        $products = \App\Models\Product::all();
        $discounts = DB::table('discounts')->join('products', 'discounts.products_id', '=', 'products.id')->get();
        $ParentCategories = \App\Models\Category::where('parent_id',0)->get();




        return view('home', compact('discounts', 'products', 'ParentCategories'));


    }

}
