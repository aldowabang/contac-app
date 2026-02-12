<?php

namespace App\Livewire;
use App\Models\Contact;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $contacts = Contact::all();
        $data = [
            'contacts' => $contacts,
        ];
        return view('livewire.home', $data);
    }
}
