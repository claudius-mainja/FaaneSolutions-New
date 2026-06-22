<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Consultation;
use App\Models\Service;

class ConsultationForm extends Component
{
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $phone = '';
    public $company = '';
    public $service_interest = '';
    public $message = '';
    public $success = false;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'company' => 'nullable|string|max:255',
        'service_interest' => 'nullable|string|max:255',
        'message' => 'required|string|max:5000',
    ];

    public function submit()
    {
        $this->validate();
        Consultation::create($this->only(['first_name', 'last_name', 'email', 'phone', 'company', 'service_interest', 'message']));
        $this->success = true;
        $this->reset();
    }

    public function render()
    {
        $services = Service::where('is_active', true)->pluck('title');
        return view('livewire.consultation-form', compact('services'));
    }
}
