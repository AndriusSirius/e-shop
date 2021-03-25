<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class HomeProducts extends Component
{
    public $product_list;

    public function render()
    {
        $this->product_list = Product::take(5)->get();
        return view('livewire.Products.home-products');
    }
}
