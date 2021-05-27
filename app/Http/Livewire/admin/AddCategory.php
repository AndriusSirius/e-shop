<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddCategory extends Component
{
    public $show = true;

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
    public function clearFields()
    {
        $this->name = null;
        $this->link = null;
        $this->parent_id = null;
        $this->nr = null;
    }
    public function render()
    {
        return view('livewire.admin.add-category');
    }
}
