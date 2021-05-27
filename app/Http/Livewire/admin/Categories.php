<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $kategorija;
    public $edit, $delete;
    public $name, $parent_id, $link, $nr;
    public function mount()
    {
        $this->edit = false;
        $this->delete = false;
        $this->name = $this->kategorija->name;
        $this->link = $this->kategorija->link;
        $this->nr = $this->kategorija->nr;
        $this->parent_id = $this->kategorija->parent_id;

    }
    public function showEdit()
    {
        $this->edit = true;
    }

    public function hideEdit()
    {
        $this->edit = false;
    }
    public function render()
    {
        return view('livewire.admin.categories',[
            'kategorijos' => Category::with('subcategories')->where('parent_id', 0)->get(),
        ]);
    }
}
