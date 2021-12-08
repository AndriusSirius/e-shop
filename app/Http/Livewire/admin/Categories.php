<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $kategorija;
    public $edit, $delete;
    public $name, $parent_id , $link, $nr, $current_level;



    protected function rules()
    {
        return [
            'name' => 'min:1',
            'link' => 'min:1',
            'nr' => 'min:1',
            'parent_id' => 'min:1',
        ];
    }

    public function mount()
    {
        $this->edit = false;
        $this->delete = false;
        $this->name = $this->kategorija->name;
        $this->link = $this->kategorija->link;
        $this->nr = $this->kategorija->nr;
        $this->parent_id = $this->kategorija->parent_id;
        $this->current_level = Category::with('subcategories')->where('parent_id', 0)->get()->sortBy('nr');
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

        $this->kategorija->name = $this->name;
        $this->kategorija->link = $this->link;
        $this->kategorija->nr = $this->nr;
        $this->kategorija->parent_id = $this->parent_id;


        $this->kategorija->save();

        $this->hideEdit();
    }
    public function render()
    {
        return view('livewire.admin.categories',[
            'kategorijos' => Category::with('subcategories')->where('parent_id', 0)->get()->sortBy('nr')
        ]);
    }
}
