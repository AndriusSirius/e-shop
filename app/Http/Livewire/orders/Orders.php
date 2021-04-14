<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Product;

class Orders extends Component
{
    public $order;
    public $price, $priceWithDiscount, $discount, $array;
    public $user;


    public function mount()
    {

        $this->order = Cart::with(['Products', 'discount'])->where('user_id', Auth::id())->get();
//        $this->price = $this->order;
    }

    public function render()
    {
        return view('livewire.orders.orders');
    }
//   public function order_checkout(){
//        return redirect()->to('/order_checkout');
//    }


}
