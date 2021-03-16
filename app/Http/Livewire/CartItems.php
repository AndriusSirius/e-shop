<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartItems extends Component
{
    public $cartTotal = 0;

    public function test()
    {
        return redirect()->to('/test');
    }

    public function mount()
    {
        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
        $this->cart = Cart::destroy('user_id', Auth::id());
    }

    public function render()
    {
//        $discounts = Product::all()->discounts();
        $cart = \App\Models\Cart::with(['products', 'images', 'users'])->get();
        return view('livewire.cart-items', compact('cart'));
    }

    public function removeCart(int $productId)
    {

        $this->cart = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId ])->delete();
    }
    public function removeFromCartQuantity($productId){
        $qty = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId])->get('quantity');
        Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId ])->update(['quantity'=>$qty[0]->quantity-1]);

    }
    public function addToCartQuantity($productId){
        $qty = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId])->get('quantity');
        Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId ])->update(['quantity'=>$qty[0]->quantity+1]);

    }
    public function checkout($productId){
        $qty = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId])->get('quantity')[0]['quantity'];
        $quantityProduct = Product::where(["id"=>$productId])->get(['quantity'])[0]['quantity'];
//        echo($qty);
        $qtyPrdc = $quantityProduct - $qty;

        Product::where(['id'=>$productId])->update(['quantity'=> $qtyPrdc]);
        $this->cart = Cart::where(['user_id'=>Auth::user()->id, 'products_id'=>$productId ])->delete();
    }
}
