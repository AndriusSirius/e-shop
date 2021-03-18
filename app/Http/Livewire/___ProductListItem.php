<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductListItem2 extends Component
{
//    public ProductListItem $product;
    public $product_list_item;

    public function mount(){
//        $this->product_list_item = $this->product_item->product;
    }
    public function render()
    {
        return view('livewire.product_list_item');
    }
}
