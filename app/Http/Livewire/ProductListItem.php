<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Cart;

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
                    $this->priceWithDiscount = ($this->price * (100-$this->discount) / 100);
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.product-list-item');
    }
    public function addToCart($productId)
    {
        Cart::create(['user_id'=>Auth::user()->id, 'products_id'=>$productId]);
        $this->emit('productAdded');
    }

    public function addToCartQuantity($productId){
        $qty = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId])->get('quantity');
        Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId ])->update(['quantity'=>$qty[0]->quantity+1]);


        Cart::update($product. $qty);
        $count = Cart::where('quantity')->count();

        $this->emit('productAdded');
    }
}
