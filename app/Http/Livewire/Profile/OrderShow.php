<?php

namespace App\Http\Livewire\Profile;

use App\Models\Order;
use App\Models\Ordering;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class OrderShow extends Component
{
    public $orderItems;
    public $orderProducts;

    public function mount()
    {
        $this->orderItems = Order::with(['discount', 'ordering'])->where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.profile.order-show');
    }
}
