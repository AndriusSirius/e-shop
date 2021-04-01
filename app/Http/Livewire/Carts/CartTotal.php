<?php

namespace App\Http\Livewire\Carts;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartTotal extends Component
{
    public  $cartTotal;

    protected $listeners=[
        'productAdded'=>'render',
    ];

    public function render()
    {
        $this->cartTotal = Cart::where('user_id', Auth::id())->get()->sum('quantity');
//        dd($this->cartTotal);
        return view('livewire.Carts.cart-total');
    }

}
