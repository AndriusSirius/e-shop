<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OthersList extends Controller
{
    public function index()
    {
        return view('other.akcijos');
    }
}
