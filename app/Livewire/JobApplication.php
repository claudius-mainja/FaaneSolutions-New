<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\JobListing;
use App\Models\Candidate;
use App\Models\Application;

class JobApplication extends Component
{
    use WithFileUploads;

    public JobListing $job;
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $phone = '';
    public $cover_letter = '';
    public $resume;
    public $cover_letter_file = null;
    public $success = false;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'cover_letter' => 'nullable|string|max:5000',
        'resume' => 'required|file|mimes:pdf,doc,docx|max:10240',
        'cover_letter_file' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
    ];

    public function submit()
    {
        $this->validate();

        $resumePath = $this->resume->store('resumes', 'public');

        $coverLetterPath = null;
        if ($this->cover_letter_file) {
            $coverLetterPath = $this->cover_letter_file->store('cover-letters', 'public');
        }

        $candidate = Candidate::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'cover_letter' => $this->cover_letter,
        ]);

        Application::create([
            'job_listing_id' => $this->job->id,
            'candidate_id' => $candidate->id,
            'resume_path' => $resumePath,
            'cover_letter_path' => $coverLetterPath,
            'status' => 'pending',
        ]);

        $this->success = true;
        $this->reset(['first_name', 'last_name', 'email', 'phone', 'cover_letter', 'resume', 'cover_letter_file']);
    }

    public function render()
    {
        return view('livewire.job-application');
    }
}
