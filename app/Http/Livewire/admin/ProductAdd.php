<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class ProductAdd extends Component
{
    public $show;
    public $title, $summary, $model, $price, $quantity, $content, $type, $product_sign, $color, $energy, $warranty;

    protected $rules = [
        'title' => 'required|min:10',
        'summary' => 'required|min:50',
        'model' => 'required|min:10',
        'price' => 'required|min:1|numeric',
        'quantity' => 'required|min:1|numeric',
        'content' => 'required|min:100',
        'type' => 'required|min:10',
        'product_sign' => 'required|min:3',
        'color' => 'required|min:3',
        'energy' => 'required|min:5',
        'warranty' => 'required|min:5',

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

        $this->validate();
        // dd('test');
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

        $this->emit('produktasPridetas');
        $this->crearFields();
        // $this->cancelProduktasCreate();

    }

    public function render()
    {
        return view('livewire.admin.product-add');
    }
}
