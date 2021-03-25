<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class OrderPrice extends Component
{
    public $order_price_total, $discount;
    public $order;

    protected $listeners = [
        'updateCart' => 'calculateOrderPrice',
    ];

    public function mount()
    {
        $this->calculateOrderPrice();


//        $this->price = $this->order_list->Products->price;
//
//        foreach ($this->order_list->discounts as $disc) {
//            if ($disc->percentage > 0) {
//                if (now() > $disc->from && now() <= $disc->to) {
//                    $this->discount = $disc->percentage;
//                    $this->priceWithDiscount = ($this->price * (100 - $this->discount) / 100) * $this->order_list->quantity;
//                }
//            } elseif($disc->percentage == 0) {
//                        $this->priceWithoutDiscount = $this->price * $this->order_list->quantity;
//                }
//        }
        $this->emit('updateCart');

    }

    public function calculateOrderPrice(){
        $this->order_price_total = 0;

        foreach ($this->order as $preke){
            $price = $preke->products->price * $preke->quantity;

            if ($preke->discount){
                $price = $price * (100 - $preke->discount->percentage) / 100;
            }

            $this->order_price_total += $price;
        }
    }

    public function render()
    {
        return view('livewire.orders.order-price');
    }
}
