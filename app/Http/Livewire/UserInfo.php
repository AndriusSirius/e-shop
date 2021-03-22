<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserInfo extends Component
{
    public $user;
    public function mount(){
        $this->user = User::where('id', Auth::id())->get();
    }
    public function render()
    {
        return view('livewire.user-info');
    }
}
