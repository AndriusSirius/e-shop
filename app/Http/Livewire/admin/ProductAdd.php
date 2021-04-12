<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Image;
use Livewire\WithFileUploads;

class ProductAdd extends Component
{
    use WithFileUploads;

    public $show;
    public $title, $summary, $model, $price, $quantity, $content, $type, $product_sign, $color, $energy, $warranty;

    public $path, $input_field_name;

    protected $rules = [
        'title' => 'required|min:1',
        'summary' => 'required|min:1',
        'model' => 'required|min:1',
        'price' => 'required|min:1|numeric',
        'quantity' => 'required|min:1|numeric',
        'content' => 'required|min:1',
        'type' => 'required|min:1',
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
        // dd('test');
        $this->show = false;
    }

    public function cancelProduktasCreate(){
        $this->show = true;
    }

    public function clearFields(){
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

        $data = Product::create([
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

        $way = null;
        if ($this->path != null){
            $pavadinimas = $this->id.".".$this->path->extension();
            $this->path->storeAs('produktai', $pavadinimas);

            $way = 'storage/produktai/'.$pavadinimas;
        }

        $this->validate([
            'path' => 'nullable|image|max:1024',
        ]);

        Image::create([
           'path' => $way,
           'products_id' => $data->id,
        ]);

        $this->path = null;

        $this->input_field_name = "image_".rand();

        $this->emit('produktasPridetas');
        $this->clearFields();

    }

    public function render()
    {
        return view('livewire.admin.product-add');
    }
}
