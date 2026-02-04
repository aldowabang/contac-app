<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\Fluent\Concerns\Has;

class Register extends Component
{
    // deklarasi properti untuk menyimpan data input pengguna
    public $name;
    public $email;
    public $password;

    // funtion untuk registrasi pengguna
    public function register()
    {
        // validasi data input pengguna
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // jika lolos validasi, buat pengguna baru
        // logika pendaftaran pengguna baru dapat ditambahkan di sini
        $user = User::create($validatedData);
        Auth::login($user);
        // redirect atau tindakan lain setelah pendaftaran berhasil
        $this->redirect(route('home'), navigate: true);
        
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
