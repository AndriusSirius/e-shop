<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Image;
use App\Models\Product;
use Livewire\WithFileUploads;

class ImagesUpload extends Component
{
    use WithFileUploads;

    public $product_id, $input_field_name;
    public $path;
//    kai daug paveiksloukų
//    public $path = [];

    public function render()
    {
        return view('livewire.admin.images-upload');
    }

    public function selectProduct(Product $product){
        $this->product = $product;
    }

    public function updatedPath()
    {
        $this->validate([
            'path' => 'image|max:1024', // 1MB Max
        ]);

    }

    public function send(){

        $this->validate([
            'path' => 'image|max:1024', // 1MB Max
//            kai daug paveiksliukų
//            'path.*' => 'nullable|image|max:1024', // 1MB Max
        ]);

        $way = null;
        if ($this->path != null){
            $pavadinimas = $this->product->id."_".time().'.'.$this->path->extension();
            $this->path->storeAs('images', $pavadinimas);
//            kai daug paveiksliukų
//            $pavadinimas = $this->me->id."_".time().'.'.$this->path[0]->extension();
//            $this->path[0]->storeAs('zinutes', $pavadinimas);
            $way = 'public/images/'.$pavadinimas;
        }

        Image::create([
           'path' => $way,
        ]);

        $this->path = null;

        $this->input_field_name = "image_".rand();

        $this->emit('naujaZinute');
    }
}
