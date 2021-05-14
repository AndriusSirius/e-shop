<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;
use App\Models\Cart;

class OrderMinusPlus extends Component
{
    public Cart $order_item;
    public $quantity;

    public function mount()
    {
        $this->quantity = $this->order_item->quantity;
    }
    public function render()
    {
        return view('livewire.orders.order-minus-plus');
    }

    public function delete()
    {
        $this->order_item->delete();
        $this->emit('updateOrder');

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
                $this->order_item->quantity = $this->quantity;
                $this->order_item->save();
            }
            else{
                $this->order_item->delete();

            }
        }
        $this->emit('updateOrder');
        $this->emit('productAdded');
    }
}

