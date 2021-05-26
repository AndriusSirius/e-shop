<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AddCategory extends Component
{
    public $show;
    public $name, $category_id, $link, $nr;

    protected $listeners = [
        'showKategorijaCreate' => 'showKategorijaCreate',
    ];
    protected $rules = [
        'name' => 'required|min:3',
        'category_id' => 'required|numeric',
        'link' => 'required|min:3',
        'nr' => 'required|integer|min:1',
    ];
    public function mount()
    {
        $this->show = true;
    }


    public function showKategorijaCreate()
    {
        $this->show = false;
    }
    public function cancelKategorijaCreate()
    {
        $this->show = true;
    }
    public function save()
    {

        $this->validate();

        $data = Category::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'link' => $this->link,
            'nr' => $this->nr,
        ]);
        $this->show = true;
        $this->emit('kategorijaPrideta');
        // $this->clearFields();
    }
    public function render()
    {
        return view('livewire.admin.add-category', [
            'kategorijos' => Category::all(),
        ]);
    }
}
