<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class CartItems extends Component
{
    public $cartTotal = 0;
    public $cart;
    protected $listeners = [
        'updateCart'=>'render',
    ];


    public function mount()
    {
        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
        $this->cart = Cart::with(['products', 'images', 'users' , 'discounts'])->where('user_id', Auth::id())->get();
    }

    public function render()
    {

//        $discounts = ProductListItem::all()->discounts();
//        $products = ProductListItem::with(['discounts'])->get('products_id');

        return view('livewire.cart-items');
    }

//
//    public function checkout($productId){
//        $qty = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId])->get('quantity')[0]['quantity'];
//        $quantityProduct = ProductListItem::where(["id"=>$productId])->get(['quantity'])[0]['quantity'];
////        echo($qty);
//        $qtyPrdc = $quantityProduct - $qty;
//
//        ProductListItem::where(['id'=>$productId])->update(['quantity'=> $qtyPrdc]);
//        Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId ])->delete();
//    }
}
