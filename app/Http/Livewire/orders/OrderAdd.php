<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Discounts;
use App\Models\Ordering;
use App\Models\Ordernumber;
use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class OrderAdd extends Component
{

    public $user, $cartTotal;

    public $status = 'Apdorojamas', $shipping, $total, $content, $products_id;

    protected $rules = [
        'shipping' => 'required|min:1',
    ];

    public function clearFields()
    {
        $this->status = null;
        $this->shipping = null;
        $this->total = null;
        $this->content = null;
    }

    public function save()
    {
        $cartTotal = Cart::where('user_id', Auth::id())->count();

        $productsId = Cart::where(['user_id' => Auth::user()->id])->pluck('products_id');
        $total = Cart::where(['user_id' => Auth::user()->id])->pluck('quantity');
        $random = rand(450, 3000);

        $data = Order::create([
            'user_id' => Auth::user()->id,
            'status' => $this->status,
            'shipping' => $this->shipping,
            'total_cost' => $random,
            'content' => $this->content,
        ]);

        for ($y = 0; $y < $cartTotal; $y++) {

            $this->validate();

             Ordering::create([
                'order_nr' => $data->id,
                'products_id' => $productsId[$y],
                'total' => $total[$y],
            ]);
        }

        $this->validate();

        Cart::where(['user_id' => Auth::user()->id])->delete();

        $this->emit('OrderAdded');
        $this->clearFields();

        return redirect()->route('order_complete');
    }


    public function render()
    {
        return view('livewire.orders.order-add');
    }
}
