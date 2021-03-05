<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
         $products = \App\Models\Product::all();
          view()->share("products", $products);
    }
}
