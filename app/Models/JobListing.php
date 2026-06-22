<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class JobListing extends Model
{
    protected $fillable = ['title', 'slug', 'location', 'type', 'department', 'summary', 'description', 'requirements', 'responsibilities', 'salary_range', 'closing_date', 'is_active'];

    protected function casts(): array
    {
        return [
            'requirements' => 'array',
            'responsibilities' => 'array',
            'is_active' => 'boolean',
            'closing_date' => 'date',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (JobListing $job) {
            $job->slug = $job->slug ?: Str::slug($job->title);
        });
    }
}
