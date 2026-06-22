<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'featured_image', 'author', 'tags', 'category', 'is_published', 'published_at'];

    protected function casts(): array
    {
        return [
            'tags' => 'array',
            'is_published' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (BlogPost $post) {
            $post->slug = $post->slug ?: Str::slug($post->title);
        });
    }
}
