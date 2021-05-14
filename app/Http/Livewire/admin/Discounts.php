<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Discounts extends Component
{
    public $nuolaida;

    public $edit, $delete;
    public $percentage, $from, $to;


    protected function rules()
    {
        return [
            'percentage' => 'min:1',
            'from' => 'date',
            'to' => 'date',
        ];
    }

    public function mount()
    {
        $this->edit = false;
        $this->delete = false;
        $this->percentage = $this->nuolaida->percentage;
        $this->from = $this->nuolaida->from;
        $this->to = $this->nuolaida->to;

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

        $this->nuolaida->percentage = $this->percentage;
        $this->nuolaida->from = $this->from;
        $this->nuolaida->to = $this->to;

        $this->nuolaida->save();
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
        $this->nuolaida->delete();

        $this->emit('produktasIstrintas');
    }

    public function render()
    {
        return view('livewire.admin.discounts');
    }
}
