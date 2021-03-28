<?php

namespace App\Http\Livewire\Carts;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartTotal extends Component
{
    public function render()
    {
        $cartTotal = Cart::where('user_id', Auth::id())->count();
        return view('livewire.Carts.cart-total', compact('cartTotal'));
    }
}
