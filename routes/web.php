<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;

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
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

// Produktas
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail'])->name('detail');

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
//Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('index');


//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'],[\App\Http\Controllers\ProductController::class, 'index']);
//Route::get('/home', [\App\Http\Controllers\ProductController::class, 'index'])->name('index');

//KREPŠELIS
Route::middleware(['auth:sanctum', 'verified'])->get('/cart', function () {
    return view('cart');
})->name('cart');
