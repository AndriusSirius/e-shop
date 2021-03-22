<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;

class OrderCheckout extends Component
{
    public $cartTotal = 0;
    public $user;
    public $order;

    protected $listeners = [
        'updateOrder'=>'render',
    ];

    public function mount()
    {
//        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
//        $this->user = User::all();
//        $this->order = Cart::with(['products', 'images', 'discounts'])->where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.order-checkout');
    }

}
