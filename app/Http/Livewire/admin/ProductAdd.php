<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Models\Discounts;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Product_category;

class ProductAdd extends Component
{
    use WithFileUploads;

    public $show;
    public $title, $summary, $model, $price, $quantity, $content, $type, $product_sign, $color, $energy, $warranty;

    public $percentage = 0, $from = '2021-01-01', $to = '2021-01-01';

    public $input_field_name;
    public $path = [];
    public $category_id = [];


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

    public function mount()
    {
        $this->show = true;
    }

    public function showProduktasCreate()
    {
        // dd('test');
        $this->show = false;
    }

    public function cancelProduktasCreate()
    {
        $this->show = true;
    }

    public function clearFields()
    {
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
        $this->path = null;
        $this->percentage = null;
        $this->from = null;
        $this->to = null;
    }

    public function save()
    {
        // dd($this->category_id);
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

        $this->validate([
            'path.*' => 'image|max:7024',
        ]);

        $way = [];

        foreach ($this->path as $photo) {

            $random = rand();

            $pavadinimas = $this->model . "-" . $random . "." . $photo->extension();

            $photo->storeAs('produktai', $pavadinimas);

            $way = 'storage/produktai/' . $pavadinimas;

            Image::create([
                'path' => $way,
                'products_id' => $data->id,
            ]);

            $photo = null;
        }

        $this->validate();

        Discounts::create([
            'products_id' => $data->id,
            'percentage' => $this->percentage,
            'from' => $this->from,
            'to' => $this->to,
        ]);




        foreach ($this->category_id as $cat) {
            Product_category::create([
                'products_id' => $data->id,
                'categories_id' => $cat,
            ]);
        }
        $this->show = true;
        $this->emit('produktasPridetas');
        $this->clearFields();
    }
    public function  category()
    {
        return  Category::all();
    }

    public function render()
    {
        return view('livewire.admin.product-add', [
            'categories' => $this->category(),
        ]);
    }
}
