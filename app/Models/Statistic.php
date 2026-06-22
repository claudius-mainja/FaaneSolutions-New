<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = ['label', 'value', 'prefix', 'suffix', 'icon', 'sort_order', 'is_active'];

    protected $table = 'statistics';

    protected function casts(): array
    {
        return [
            'value' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
