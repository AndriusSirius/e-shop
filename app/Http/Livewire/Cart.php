<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public $cartTotal;

    public function mount(): void
    {
        $this->cartTotal = \App\Models\Cart::where('user_id', Auth::id())->count();

        $this->cart = CartFacade::get();
    }
    public function render()
    {
        return view('livewire.cart');
    }
    public function removeFromCart($productId): void
    {
        CartFacade::remove($productId);
        $this->cart = CartFacade::get();
    }
    public function checkout(): void
    {
        CartFacade::clear();
        $this->cart = CartFacade::get();
    }
}
