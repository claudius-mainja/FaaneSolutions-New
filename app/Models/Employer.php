<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = ['company_name', 'contact_name', 'email', 'phone', 'website', 'industry', 'message', 'status'];

    protected function casts(): array
    {
        return [
            'status' => 'string',
        ];
    }
}
