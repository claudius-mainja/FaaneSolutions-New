<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\NewsletterSubscriber;

class NewsletterSignup extends Component
{
    public $email = '';
    public $success = false;

    protected $rules = [
        'email' => 'required|email|max:255|unique:newsletter_subscribers,email',
    ];

    public function submit()
    {
        $this->validate();
        NewsletterSubscriber::create([
            'email' => $this->email,
            'is_active' => true,
            'subscribed_at' => now(),
        ]);
        $this->success = true;
        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.newsletter-signup');
    }
}
