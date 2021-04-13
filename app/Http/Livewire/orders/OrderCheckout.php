<?php

namespace App\Http\Livewire\Orders;

use App\Http\Livewire\Carts\Carts;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderCheckout extends Component
{
    public $cartTotal = 0;
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
    }

    public function render()
    {
        return view('livewire.orders.order-checkout');
    }

}
