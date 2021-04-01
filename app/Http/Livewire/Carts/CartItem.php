<?php

namespace App\Http\Livewire\Carts;

use Livewire\Component;
use App\Models\Cart;

class CartItem extends Component
{
    public Cart $cart_item;
    public $quantity;

    public function mount(){
        $this->quantity = $this->cart_item->quantity;
    }

    public function render()
    {
        return view('livewire.Carts.cart-item');
    }

    public function delete()
    {
        $this->cart_item->delete();
        $this->emit('updateCart');
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
        $this->emit('productAdded');


    }
}
