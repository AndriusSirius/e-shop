<?php

namespace App\Http\Livewire\Carts;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddCartButtonProduct extends Component
{
    public $product, $quantity, $cartProduct;

    public function mount(){
        $this->quantity = 1;
    }

    public function render()
    {
        return view('livewire.carts.add-cart-button-product');
    }

    public function addToCart($productId)
    {
        $qty = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId])->get('quantity');

        if ($qty->count() == 0) {
            Cart::create(['user_id'=>Auth::user()->id, 'products_id'=>$productId, 'quantity'=>$this->quantity]);
        }
        else {
            Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId ])->update(['quantity'=>$qty[0]->quantity+$this->quantity]);
        }
        $this->emit('productAdded');
    }

    public function minusQuantity()
    {
        $this->quantity--;
    }

    public function plusQuantity()
    {
        $this->quantity++;
    }
}
