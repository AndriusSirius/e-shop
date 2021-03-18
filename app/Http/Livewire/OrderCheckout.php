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
        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
        $this->order = Cart::with(['products', 'images', 'users' , 'discounts'])->where('user_id', Auth::id())->get();
        $this->user = User::all();
    }

    public function render()
    {
        return view('livewire.order-checkout');
    }

}
