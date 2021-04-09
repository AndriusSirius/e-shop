<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class Products extends Component
{
    public $produktas;
    public $edit, $delete;
    public $title, $summary, $model, $price, $quantity, $content, $type, $product_sign, $color, $energy, $warranty;

    protected function rules()
    {
        return [
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
        dd($this->produktas);
        $this->validate();

        $this->produktas->title = $this->title;
        $this->produktas->summary = $this->summary;
        $this->produktas->model = $this->model;
        $this->produktas->price = $this->price;
        $this->produktas->content = $this->content;
        $this->type = $this->produktas->type;
        $this->product_sign = $this->produktas->product_sign;
        $this->color = $this->produktas->color;
        $this->energy = $this->produktas->energy;
        $this->warranty = $this->produktas->warranty;

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
