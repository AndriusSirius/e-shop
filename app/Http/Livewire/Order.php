<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class Order extends Component
{
//    public Order $order;
    public $price, $priceWithDiscount, $discount;
    public $cartTotal = 0;
    public $user;
    public $order;

    protected $listeners = [
        'updateOrder'=>'render',
    ];

    public function mount(){
//        $this->price = $this->order->price;
//
//        foreach ($this->order->discounts as $disc){
//            if ($disc->percentage > 0){
//                if (now() > $disc->from && now() <= $disc->to){
//                    $this->discount = $disc->percentage;
//                    $this->priceWithDiscount = ($this->price * 100 - $this->discount) / 100;
//                }
//            }
//        }
        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
        $this->order = Cart::with(['products', 'images' , 'discounts'])->where('user_id', Auth::id())->get();
    }
    public function render()
    {
        return view('livewire.order');
    }
//   public function order_checkout(){
//        return redirect()->to('/order_checkout');
//    }


}
