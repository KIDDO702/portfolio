<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Blogs;
use App\Models\Listing;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function index ()
    {
        return view('blogs.index', [
            'blogs' => Blog::latest()->filter(request(['meta', 'search']))->paginate(4)
        ]);
    }

    public function show (Blog $blog,)
    {
        // dd($blog);
        return view('blogs.show', [
            'blog' => $blog,
            'listings' => Blog::latest()->get(),
            'comments' => $blog->comments()->get()
        ]);
    }

    public function store (Request $request)
    {
        // ddd($request->file('image'));
        $fields = $request->validate([
            'title' => 'required|unique:blogs',
            'about' => 'required',
            'meta' => 'required',
            'content' => 'required',
        ]);

        // ADD IMAGE PATH
        if ($request->hasFile('image'))
        {
            $fields['image'] = $request->file('image')->store('blogs', 'public');
        // ddd($fields->image);
        }
        // dd($fields);
        Blog::create($fields);
        return redirect('/admin/addblog')->with('message', 'Blog created successfully');
    }

    public function edit (Blog $blog)
    {
        return view('admin.blogedit',[
            'blog' => $blog
        ]);
    }

    public function update (Request $request, Blog $blog)
    {
        // dd($request->file('image'));
        $fields = $request->validate([
            'title' => 'required',
            'about' => 'required',
            'meta' => 'required',
            'content' => 'required',
        ]);
        if ($request->hasFile('image'))
        {
            $fields['image'] = $request->file('image')->store('blogs', 'public');
            ddd($fields->image);
        }
        $blog->update($fields);
        return redirect('/admin/editblog')->with('message', 'Blog updated successfully');
    }

    public function destroy (Blog $blog)
    {
        $blog->delete();
        return redirect('/admin/editblog')->with('message', 'Blog Deleted successfully');
    }

}
