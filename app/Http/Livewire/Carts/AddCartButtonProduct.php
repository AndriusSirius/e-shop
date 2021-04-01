<?php

namespace App\Http\Livewire\Carts;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddCartButtonProduct extends Component
{
    public $product, $quantity, $cartProduct;
    public function mount(){

    }

    public function render()
    {
        return view('livewire.carts.add-cart-button-product');
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
    public function minusQuantity(){
        $this->quantity--;
        $this->updatedQuantity();

    }

    public function plusQuantity(){

        $this->quantity++;
        $this->updatedQuantity();
    }
    public function updatedQuantity(){
        foreach($this->product->cart as $cartProduct){
        if(is_numeric($this->quantity)){
            if($this->quantity > 0){
                $cartProduct->quantity = $this->quantity;
                $cartProduct->save();
            }
            else{
                $cartProduct->delete();

            }
        }

        }

        $this->emit('updateCart');

    }
}
