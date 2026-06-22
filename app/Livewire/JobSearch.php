<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\JobListing;

class JobSearch extends Component
{
    use WithPagination;

    public $search = '';
    public $type = '';
    public $department = '';
    public $location = '';

    protected $queryString = ['search', 'type', 'department', 'location'];

    public function render()
    {
        $query = JobListing::where('is_active', true)
            ->where(function($q) {
                $q->whereNull('closing_date')->orWhere('closing_date', '>=', now());
            });

        if ($this->search) {
            $query->where(function($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('summary', 'like', '%' . $this->search . '%')
                  ->orWhere('department', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->type) {
            $query->where('type', $this->type);
        }

        if ($this->department) {
            $query->where('department', $this->department);
        }

        if ($this->location) {
            $query->where('location', 'like', '%' . $this->location . '%');
        }

        $jobs = $query->latest()->paginate(10);
        $departments = JobListing::where('is_active', true)->select('department')->distinct()->pluck('department')->filter();

        return view('livewire.job-search', [
            'jobs' => $jobs,
            'departments' => $departments,
        ]);
    }

    public function resetFilters()
    {
        $this->reset(['search', 'type', 'department', 'location']);
    }
}
