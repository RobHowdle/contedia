<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show() {
        return view('login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formFields)) {
             $request->session()->regenerate();

             return redirect('/')->with('message', 'You are now logged in!');
        } 

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput();
    }
}