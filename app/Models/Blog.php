<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function scopeFilter ($query, array $filters)
    {
        if ($filters['meta'] ?? false)
        {
            $query->where('meta', 'like', '%' .request('meta'). '%');
        }
        if ($filters['search'] ?? false)
        {
            $query->where('title', 'like', '%' .request('search'). '%')
                  ->orWhere('about', 'like', '%'.request( 'search'). '%')
                  ->orWhere('meta', 'like', '%'.request( 'search'). '%')
                  ->orWhere('content', 'like', '%'.request( 'search'). '%');
        }
    }

    protected $fillable = [
        'title',
        'about',
        'meta',
        'content',
        'image'
    ];

    // Relationships
    public function comments ()
    {
        return $this->hasMany(BlogComment::class, 'blog_id');
    }
}
