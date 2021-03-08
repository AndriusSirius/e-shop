<?php

namespace App\Http\Controllers;

use App\Models\Discounts;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class HomeController extends Controller
{
    public function home()
    {
        $thistime = Carbon::now();
        $products = DB::table('discounts')->join('products', 'discounts.products_id', '=', 'products.id')->join('images', 'images.products_id', '=', 'products.id')->get();
        $ParentCategories = \App\Models\Category::where('parent_id',0)->get();

        return view('home', compact('thistime', 'products', 'ParentCategories'));


    }

}
