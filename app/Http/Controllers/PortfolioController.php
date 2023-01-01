<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogs;
use App\Models\Listing;
use App\Models\Listings;

use App\Models\Projects;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index ()
    {
        return view('portfolio.index', [
            'listings' => Listing::all(),
            'blogs' => Blog::all()
        ]);

    }

    public function about ()
    {
        return view('portfolio.about');
    }

    public function projects ()
    {
        return view('portfolio.projects', [
            'projects' => Projects::all()
        ]);
    }

    public function showproject ()
    {
        return view('portfolio.project', [
            'project'
        ]);
    }
}
