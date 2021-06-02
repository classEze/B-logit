<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login');
    }

    public function login(Request $request)
    {
       if(!auth()->attempt($request->only(['email', 'password'])))
        return back()->with('message', 'Invalid Credentials');

        return redirect()->route('dashboard');
    }
}
