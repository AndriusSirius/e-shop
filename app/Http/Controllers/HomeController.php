<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Routing\Route;


class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

}
