<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $message = '';
    public $success = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:5000',
    ];

    public function submit()
    {
        $this->validate();
        Contact::create($this->all());
        $this->success = true;
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
