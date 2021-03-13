<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $search;
    public $test = 5;

    protected $updatesQueryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.product_list', [
            'products' => $this->search === null ?
                Product::paginate(12) :
                Product::where('name', 'like', '%' . $this->search . '%')->paginate(12)
        ]);
    }

    public function addToCart(int $productId)
    {
        \App\Models\Cart::create(['user_id'=>Auth::user()->id, 'products_id'=>$productId ]);

        $this->emit('productAdded');
    }
    
}
