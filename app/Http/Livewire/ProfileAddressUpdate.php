<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileAddressUpdate extends Component
{
    public $city, $address, $post_code, $user;

    public function mount()
    {
        $this->user = Auth::user();
        
        $this->city = $this->user->city;
        $this->address = $this->user->address;
        $this->post_code = $this->user->post_code;
    }

    public function updateAddress()
    {
        // User::make($input, [
        //     'city' => ['required', 'string', 'max:255'],
        //     'address' => ['required', 'string', 'max:255'],
        //     'post_code' => ['required', 'string', 'max:255'],
        // ]);

        // $user->forceFill([
        //     'city' => $input['city'],
        //     'address' => $input['address'],
        //     'post_code' => $input['post_code'],
        // ])->save();

        // Auth::user();

        $data = $this->validate([
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'post_code' => 'required|max:255',
        ]);

        $this->user->fill($data);

        $this->user->save();

    }

    public function render()
    {
        return view('livewire.profile-address-update');
    }
}
