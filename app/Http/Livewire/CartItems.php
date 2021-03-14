<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartItems extends Component
{
    public $cartTotal = 0;

    public function test()
    {
        return redirect()->to('/test');
    }
    
    public function mount()
    {
        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
        $this->cart = Cart::destroy('user_id', Auth::id());
    }

    public function render()
    {
        $cart = \App\Models\Cart::with(['products', 'images', 'users'])->get();
        return view('livewire.cart-items', compact('cart'));
    }

    public function removeCart(int $productId)
    {
        $this->cart = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId ])->delete();
    }
}
