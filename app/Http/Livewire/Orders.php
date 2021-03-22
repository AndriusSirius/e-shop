<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class Orders extends Component
{
    public $order;
    public $price, $priceWithDiscount, $discount, $array;
    public $user;


    public function mount(){
        $this->order = Cart::with(['products', 'discounts'])->where('user_id', Auth::id())->get();

//        dd($this->order_list);

//        $this->array= $this->order->collect();
////dd($this->order);
//        foreach ($this->order as $col){
//            dd($col);
//        }
////            dd($this->order);
//        foreach($this->array as $orders) {
//            dd($orders);
//            $this->price = $this->order->products->price;
////                dd($this->array);
//            foreach ($this->order->discounts as $disc) {
//                if ($disc->percentage > 0) {
//                    if (now() > $disc->from && now() <= $disc->to) {
//                        $this->discount = $disc->percentage;
//                        $this->priceWithDiscount = ($this->price * (100 - $this->discount) / 100);
//                    }
//                }
//            }
//        }
    }
    public function render()
    {
        return view('livewire.orders');
    }
//   public function order_checkout(){
//        return redirect()->to('/order_checkout');
//    }


}
