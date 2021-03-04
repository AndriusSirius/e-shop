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

//Route::get('/login', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
//Route::get('/category',[\App\Http\Controllers\CategoryController::class, 'home'])->name('category');
//Route::get('/', [HomeController::class,'home'])->name('home');
//
//
//Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//    return view('home');
//})->name('home');

//Route::resource('category','CategoryController');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
//PAGRINDINIS
Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

//KREPŠELIS
Route::middleware(['auth:sanctum', 'verified'])->get('/cart', function () {
    return view('cart');
})->name('cart');
