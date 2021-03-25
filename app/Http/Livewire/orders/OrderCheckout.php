<?php

namespace App\Http\Livewire\Orders;

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
        $this->price = $this->order_list->products->price;

        foreach ($this->order_list->discounts as $disc) {
            if ($disc->percentage > 0) {
                if (now() > $disc->from && now() <= $disc->to) {
                    $this->discount = $disc->percentage;
                    $this->priceWithDiscount = ($this->price * (100 - $this->discount) / 100) * $this->order_list->quantity;
                }
            } elseif($disc->percentage == 0) {
                $this->priceWithoutDiscount = $this->price * $this->order_list->quantity;
            }
        }

//        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
//        $this->user = User::all();
//        $this->order = Cart::with(['Products', 'images', 'discounts'])->where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.orders.order-checkout');
    }

}
