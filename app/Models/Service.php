<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'description', 'highlights', 'icon', 'image', 'sort_order', 'is_active'];

    protected function casts(): array
    {
        return [
            'highlights' => 'array',
            'is_active' => 'boolean',
        ];
    }
}
