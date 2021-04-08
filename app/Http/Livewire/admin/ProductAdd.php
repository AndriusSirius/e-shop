<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class ProductAdd extends Component
{
    public $show;
    public $title, $summary;

    protected $rules = [
        'title' => 'required|min:6',
        'summary' => 'required|min:6',
    ];

    protected $listeners = [
      'showProduktasCreate' => 'showProduktasCreate',
    ];

    public function mount(){
        $this->show = false;
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
    }

    public function save(){
        $this->validate();

        $this->Product::create([
            'title' => $this->title,
            'summary' => $this->summary,
        ]);

        $this->emit('produktasPridetas');
        $this->crearFields();
        $this->cancelReceptasCreate();

    }

    public function render()
    {
        return view('livewire.admin.product-add');
    }
}
