<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;

class Register extends Component
{
    public $name, $email, $password;

    public function render()
    {
        return view('livewire.register');
    }

    public function register()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users|email',
            'password' => 'required|max:12',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        return redirect()->route('login');
    }
}