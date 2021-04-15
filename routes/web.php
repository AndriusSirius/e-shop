<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire;
//use App\Http\Controllers\HomeController;
use App\Http\Livewire\Header;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//PAGRINDINIS
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home']);
//Route::get('/home', function (){
//    if(auth()->user()){
//        auth()->user()->assignRole('admin');
//    }
//});
Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/all_products', [\App\Http\Controllers\AllProducts::class, 'all'])->name('all_products');

Route::get('/order_checkout/order_complete', [\App\Http\Controllers\OrderComplete::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('order_complete');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('admin');

//Route::get('/', [\App\Http\Livewire\Header::class, 'render'])->name('home');
//KREPŠELIS

Route::get('/carts', [\App\Http\Controllers\CartController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('carts');
Route::get('/order_checkout', [\App\Http\Controllers\OrderController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('order_checkout');
// Produktas
Route::get('product/{id}', [\App\Http\Controllers\ProductController::class, 'detail'])->name('product');
// Kategorijos

Route::get('/{link1}/{link2?}', [\App\Http\Controllers\CategoryController::class, 'listing3'])->name('category_list');
