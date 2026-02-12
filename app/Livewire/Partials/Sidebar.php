<?php

namespace App\Livewire\Partials;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Sidebar extends Component
{

    public function logout()
    {
        Auth::logout();
        $this->redirect(route('login'), navigate: true);
    }
    public function render()
    {
        return view('livewire.partials.sidebar');
    }
}
