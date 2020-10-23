<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AuthController extends Component
{
    public function render()
    {
        return view('livewire.auth-controller');
    }
    public function login()
    {
        return view('livewire.Auth.login');
    }
    public function register()
    {
        return view('livewire.Auth.register');
    }
   
}
