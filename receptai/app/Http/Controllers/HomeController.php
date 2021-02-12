<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function home(){
        $categories = Category::all()->sortBy('nr');

        return view('welcome', compact('categories'));
    }
}
