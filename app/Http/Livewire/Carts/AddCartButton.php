<?php

namespace App\Http\Livewire\Carts;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddCartButton extends Component
{
    public $product_list_item, $discount, $priceWithDiscount, $price;
    public function mount(){
        $this->price = $this->product_list_item->price;

        if ($this->product_list_item->discount){
            $this->discount = $this->product_list_item->discount->percentage;
            $this->priceWithDiscount = ($this->price * (100 - $this->discount) / 100);
        }
    }
    public function render()
    {
        return view('livewire.carts.add-cart-button');
    }
    public function addToCart($productId)
    {
        $qty = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId])->get('quantity');
        if($qty->count() == 0){
            Cart::create(['user_id'=>Auth::user()->id, 'products_id'=>$productId]);
        }
        else{
            Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId ])->update(['quantity'=>$qty[0]->quantity+1]);
        }
        $this->emit('productAdded');
    }
}
