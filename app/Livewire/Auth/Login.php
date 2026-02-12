<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';

    public function login()
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($validatedData)) {
            session()->regenerate();
            $this->redirect(route('home'), navigate: true);
        } else {
            $this->addError('email', 'The provided credentials do not match our records.');
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
