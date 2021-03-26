<?php

namespace App\Http\Livewire\Products;

use App\Models\Cart;
use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.Products.product');
    }
    public function minusQuantity(){
        $this->quantity--;
        $this->updatedQuantity();

    }

    public function plusQuantity(){

        $this->quantity++;
        $this->updatedQuantity();
    }
    public function updatedQuantity(){

        if(is_numeric($this->quantity)){
            if($this->quantity > 0){
                $this->cart_item->quantity = $this->quantity;
                $this->cart_item->save();
            }
            else{
                $this->cart_item->delete();

            }
        }
        $this->emit('updateCart');

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
