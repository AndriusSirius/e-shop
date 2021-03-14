<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;
use App\Models\Cart;

class Header extends Component
{
    public $cartTotal = 0;
    protected $listeners = [
        'productAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal'
    ];

    public function mount()
    {
        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
    }

    public function render()
    {
        $cartTotal = $this->cartTotal;
        return view('livewire.navigation-menu', compact("cartTotal"));
    }

    public function updateCartTotal()
    {
        $this->cartTotal = Cart::where('user_id', Auth::id())->count();
    }

    public function test()
    {
        return redirect()->to('/test');
    }
}
