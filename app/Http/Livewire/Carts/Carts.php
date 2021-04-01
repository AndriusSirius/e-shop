<?php

namespace App\Http\Livewire\Carts;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class Carts extends Component
{
    public $cart;
    public $cartTotal = 0;

    public function mount()
    {

        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
    }

    public function render()
    {
        return view('livewire.Carts.carts');
    }


}
