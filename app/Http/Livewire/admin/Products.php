<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Discounts;
use App\Models\Image;


class Products extends Component
{
    public $produktas;
    // test
    public $edit, $delete;
    public $title, $summary, $model, $price, $quantity, $content, $type, $product_sign, $color, $energy, $warranty;



    protected function rules()
    {
        return [
            'title' => 'min:6',
            'summary' => 'min:6',
            'model' => 'min:6',
            'price' => 'min:2',
            'quantity' => 'min:1',
            'content' => 'min:100',
            'type' => 'min:6',
            'product_sign' => 'min:3',
            'color' => 'min:3',
            'energy' => 'min:3',
            'warranty' => 'min:1',
        ];
    }

    public function mount()
    {
        $this->edit = false;
        $this->delete = false;
        $this->title = $this->produktas->title;
        $this->summary = $this->produktas->summary;
        $this->model = $this->produktas->model;
        $this->price = $this->produktas->price;
        $this->quantity = $this->produktas->quantity;
        $this->content = $this->produktas->content;
        $this->type = $this->produktas->type;
        $this->product_sign = $this->produktas->product_sign;
        $this->color = $this->produktas->color;
        $this->energy = $this->produktas->energy;
        $this->warranty = $this->produktas->warranty;

    }

    public function showEdit()
    {
        $this->edit = true;
    }

    public function hideEdit()
    {
        $this->edit = false;
    }

    public function saveChanges()
    {

        $this->validate();

        $this->produktas->title = $this->title;
        $this->produktas->summary = $this->summary;
        $this->produktas->model = $this->model;
        $this->produktas->price = $this->price;
        $this->produktas->quantity = $this->quantity;
        $this->produktas->content = $this->content;
        $this->produktas->type = $this->type;
        $this->produktas->product_sign = $this->product_sign;
        $this->produktas->color = $this->color;
        $this->produktas->energy = $this->energy;
        $this->produktas->warranty = $this->produktas->warranty;

        $this->produktas->save();
    }

    public function delete()
    {
        $this->delete = true;
    }

    public function deleteCancel()
    {
        $this->delete = false;
    }

    public function deleteConfirm()
    {
        $this->produktas->delete();

        $this->emit('produktasIstrintas');
    }

    public function render()
    {
        return view('livewire.admin.products');
    }
}
