<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function store (Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'email|unique:admin|required',
            'password' => 'required|confirmed|min:8'
        ]);
        $fields['password'] = bcrypt($fields['password']);

        $admin = User::create($fields);
        auth()->login($admin);
        return redirect('/admin')->with('message', 'Logged In Successfully');

    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have logged out');
    }

    public function login ()
    {
        return view('users.login');
    }

    public function authenticate (Request $request)
    {
        $fields = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        if (auth()->attempt($fields))
        {
            $request->session()->regenerate();
            return redirect('/admin')->with('message', 'Logged In Successfully');
        }
        return back()->withErrors(['email' => 'Invalid Details'])->onlyInput('email');
    }
}
