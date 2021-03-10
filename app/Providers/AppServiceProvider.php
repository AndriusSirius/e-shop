<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Models\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $ParentCategories = \App\Models\Category::where('parent_id',0)->get();
        view()->share('ParentCategories',$ParentCategories);

        $discounts = DB::table('discounts')->join('products', 'discounts.products_id', '=', 'products.id')->get();
        $products = \App\Models\Product::all();
        return view('home', compact('discounts', 'products', 'ParentCategories'));

    }
}
