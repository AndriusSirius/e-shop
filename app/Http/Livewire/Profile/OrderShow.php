<?php

namespace App\Http\Livewire\Profile;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class OrderShow extends Component
{
    public $orderItems;

    public function mount()
    {
        $this->orderItems = Order::with(['Products', 'discount'])->where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.profile.order-show');
    }
}
