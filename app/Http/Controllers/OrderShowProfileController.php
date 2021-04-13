<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderShowProfileController extends Controller
{
    public function index()
    {
        $orderItems = Order::where('user_id', Auth::user()->id)->get();
        return view('livewire.profile.order-show', compact('orderItems'));
    }

}
