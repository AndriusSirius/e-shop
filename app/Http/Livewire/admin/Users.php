<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Users extends Component
{
    public $user;
    public $edit, $delete;
    public $name, $Lastname, $email, $country, $city, $address, $phone_number, $post_code;

    protected function rules()
    {
        return [
            'name' => 'min:6',
            'Lastname' => 'min:6',
            'email' => 'min:6',
            'country' => 'min:2',
            'city' => 'min:1',
            'address' => 'min:100',
            'phone_number' => 'min:6|numeric',
            'post_code' => 'min:3',
        ];
    }

    public function mount()
    {
        $this->edit = false;
        $this->delete = false;
        $this->name = $this->user->name;
        $this->Lastname = $this->user->Lastname;
        $this->email = $this->user->email;
        $this->country = $this->user->country;
        $this->city = $this->user->city;
        $this->address = $this->user->address;
        $this->phone_number = $this->user->phone_number;
        $this->post_code = $this->user->post_code;
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

        $this->user->name = $this->name;
        $this->user->Lastname = $this->Lastname;
        $this->user->email = $this->email;
        $this->user->country = $this->country;
        $this->user->city = $this->city;
        $this->user->address = $this->address;
        $this->user->phone_number = $this->phone_number;
        $this->user->post_code = $this->post_code;

        $this->user->save();
    }

    public function delete()
    {
        $this->delete = true;
    }

    // public function deleteCancel()
    // {
    //     $this->delete = false;
    // }

    public function deleteConfirm()
    {
        $this->user->delete();
        $this->emit('userIstrintas');
    }

    public function render()
    {
        return view('livewire.admin.users');
    }
}
