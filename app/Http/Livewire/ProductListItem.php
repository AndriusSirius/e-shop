<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductListItem extends Component
{
    public Product $product_list_item;
    public $price, $priceWithDiscount, $discount;


    public function mount(){
        $this->price = $this->product_list_item->price;

        foreach ($this->product_list_item->discounts as $disc){
            if ($disc->percentage > 0){
                if (now() > $disc->from && now() <= $disc->to){
                    $this->discount = $disc->percentage;
                    $this->priceWithDiscount = ($this->price * 100 - $this->discount) / 100;
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.product-list-item');
    }
}
