<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Routing\Route;


class HomeController extends Controller
{
    public function home()
    {
        $ParentCategories = \App\Models\Category::where('parent_id',0)->get();
        return view('home', compact('ParentCategories'));

    }

}
