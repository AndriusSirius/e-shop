<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Carts extends Component
{
    public $cart;

    public function mount()
    {

        $this->cart = \App\Models\Cart::all();
    }

    public function render()
    {
        return view('livewire.navigation-menu');
    }


}
