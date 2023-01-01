<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Contact;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index ()
    {
        return view('admin.index', [
            'blogs' => Blog::all(),
            'listings' => Listing::all(),
            'contacts' => Contact::latest()->paginate(5),
            'comments' => BlogComment::latest()->paginate(5)
        ]);

    }

    public function blog ()
    {
        return view('admin.blogs');
    }

    public function edit ()
    {
        return view('admin.editbog', [
            'blogs' => Blog::latest()->paginate(7),
        ]);
    }

    public function project ()
    {
        return view('admin.addproject');
    }

    public function editproject ()
    {
        return view('admin.editproject',[
            'listings' => Listing::latest()->paginate(7)
        ]);
    }
    public function create()
    {
        return view('users.register');
    }
}
