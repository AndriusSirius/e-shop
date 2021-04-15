<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderComplete extends Controller
{
    public function index()
    {
        $order_list = Order::where(['user_id' => Auth::user()->id])->get();

        return view('livewire.orders.order-complete', compact('order_list'));

    }
}
