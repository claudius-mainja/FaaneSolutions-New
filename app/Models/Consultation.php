<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'company', 'service_interest', 'message', 'status', 'notes'];

    protected function casts(): array
    {
        return [
            'status' => 'string',
        ];
    }

    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
