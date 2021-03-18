<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeProducts extends Component
{
    public $product_list;

    public function render()
    {
        $this->product_list = Product::take(5)->get();
        return view('livewire.home-products');
    }
}
