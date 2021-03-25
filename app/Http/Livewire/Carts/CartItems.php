<?php

namespace App\Http\Livewire\Carts;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;

class CartItems extends Component
{
    public $cartTotal = 0;
    public $cart;
    public $user;
    protected $listeners = [
        'updateCart'=>'render',
    ];

    public function fireUpdateCart(){
        $this->emit('updateCart');
    }


    public function mount()
    {
        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
        $this->user = User::where('id', Auth::id())->get();
        $this->cart = Cart::with(['products', 'images', 'users' , 'discount'])->where('user_id', Auth::id())->get();
    }

    public function render()
    {

//        $discounts = ProductListItem::all()->discounts();
//        $Products = ProductListItem::with(['discounts'])->get('products_id');

        return view('livewire.Carts.cart-items');
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
