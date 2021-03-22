<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class OrderPrice extends Component
{
    public $price, $priceWithDiscount, $discount, $priceWithoutDiscount;
    public $order_list;

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
//                        print_r($this->priceWithoutDiscount);
        $this->emit('updateCart');

    }

    public function render()
    {
        return view('livewire.order-price');
    }
}
