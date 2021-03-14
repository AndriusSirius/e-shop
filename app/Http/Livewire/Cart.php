<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{
    public function render()
    {
        return view('livewire.cart');
    }
}