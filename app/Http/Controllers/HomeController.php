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
       $news = Product::orderBy('id', 'desc')->take(12)->get();
       $all = Product::all();
       $ParentCategories = \App\Models\Category::where('parent_id',0)->get();

       $stambi = $ParentCategories->find(2);
       $stambiProducts = $stambi->products()->take(12)->get();

       $smulki = $ParentCategories->find(1);
       $smulkiProducts = $smulki->products()->take(12)->get();

       $namu = $ParentCategories->find(3);
       $namuProducts = $namu->products()->take(12)->get();

//        dd($ParentCategories->find(2)->products()->take(3)->get());

       return view('home', compact(
           'news',
           'all',
           'stambi',
           'stambiProducts',
           'smulki',
           'smulkiProducts',
           'namu',
           'namuProducts',
       ));
    }

}
