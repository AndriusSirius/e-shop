<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class ProductAdd extends Component
{
    public $show;
    public $title, $summary, $model, $price, $quantity, $content, $type, $product_sign, $color, $energy, $warranty;

    protected $rules = [
        'title' => 'required|min:6',
        'summary' => 'required|min:6',
        'model' => 'required|min:6',
        'price' => 'required|min:6',
        'quantity' => 'required|min:6',
        'content' => 'required|min:6',
        'type' => 'required|min:6',
        'product_sign' => 'required|min:6',
        'color' => 'required|min:6',
        'energy' => 'required|min:6',
        'warranty' => 'required|min:6',

    ];

    protected $listeners = [
      'showProduktasCreate' => 'showProduktasCreate',
    ];

    public function mount(){
        $this->show = true;
    }

    public function showProduktasCreate(){
        $this->show = true;
    }

    public function cancelProduktasCreate(){
        $this->show = false;
    }

    public function crearFields(){
        $this->title = null;
        $this->summary = null;
        $this->model = null;
        $this->price = null;
        $this->quantity = null;
        $this->content = null;
        $this->type = null;
        $this->product_sign = null;
        $this->color = null;
        $this->energy = null;
        $this->warranty = null;
    }

    public function save(){
        dd($this->produktas);
        $this->validate();

        $produktas = Product::create([
            'title' => $this->title,
            'summary' => $this->summary,
            'model' => $this->model,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'content' => $this->content,
            'type' => $this->type,
            'product_sign' => $this->product_sign,
            'color' => $this->color,
            'energy' => $this->energy,
            'warranty' => $this->warranty,
        ]);
     dd();
        $this->emit('produktasPridetas');
        $this->crearFields();
        $this->cancelProduktasCreate();

    }

    public function render()
    {
        return view('livewire.admin.product-add');
    }
}
