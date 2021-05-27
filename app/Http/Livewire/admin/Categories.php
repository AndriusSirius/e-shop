<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $kategorija;
    public $edit, $delete;
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
            'data' => Category::all(),
        ]);
    }
}
