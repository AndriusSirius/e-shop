<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Header;
use App\Models\Discounts;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;

class HomeController extends Controller{
    public function home()
    {
        // $Products = DB::table('discounts')->join('Products', 'discounts.products_id', '=', 'Products.id')->join('images', 'images.products_id', '=', 'Products.id')->get();
       $news = Product::take(5)->orderByDesc('id')->get();
       $all = Product::all();

       return view('home', compact('news', 'all'));
        $product_list = Product::take(10)->get();
        $ParentCategories = \App\Models\Category::where('parent_id',0)->get();
        return view('home', compact( 'ParentCategories', 'product_list'));

    }

}
