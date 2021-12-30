<?php

namespace App\Http\Livewire\Login;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.login.index');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|max:12',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
    }
}