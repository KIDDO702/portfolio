<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\List_;

class ListingsController extends Controller
{
    public function index()
    {
        //dd(request('tag'));
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function store (Request $request)
    {
        $project = $request->validate([
            'title' => 'required|unique:listings',
            'about' => 'required',
            'tags' => 'required',
            'content' => 'required'
        ]);
        if ($request->hasFile('image'))
        {
            $project['image'] = $request->file('image')->store('projects', 'public');
        }

        Listing::create($project);
        return redirect('/admin/addproject')->with('message', 'project added successfully');

    }

    public function edit (Listing $listing)
    {
        return view('admin.projectedit', [
            'listing' => $listing
        ]);
    }

    public function update (Request $request, Listing $listing)
    {
        $project = $request->validate([
            'title' => 'required',
            'about' => 'required',
            'tags' => 'required',
            'content' => 'required'
        ]);

        $listing->update($project);
        return redirect('/admin/editproject')->with('message', 'Project updated successfully');
    }

    public function destroy (Listing $listing)
    {
        $listing->delete();
        return redirect('/admin/editproject')->with('message', 'Project deleted successfully');
    }
}
