<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store (Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'body' => 'required'
        ]);

        Contact::create($fields);
        return redirect('/')->with('message', ',message received successfully, wait for a response');
    }

}
