<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    public function store (Request $request, Blog $blog)
    {
        //dd($blog->id);
        $comment = $request->validate([
            'name' => 'required|unique:blog_comments',
            'email' => 'required',
            'comment' => 'required'
        ]);
        $comment['blog_id'] = $blog->id;

        BlogComment::create($comment);
        return redirect('/blogs/');
    }

}
