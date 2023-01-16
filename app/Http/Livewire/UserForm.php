<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserForm extends Component
{
    public $name;
    public $email;

    public function render()
    {
        $countries = [
            'en' => 'English',
            'ru' => 'Русский',
        ];

        return view('livewire.user-form', compact('countries'));
    }
}
