<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'comment', 'blog_id'
    ];
    // Relationships
    public function blog ()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

}
