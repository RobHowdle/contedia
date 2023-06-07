<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{

    public function create() {
        return view('register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:12',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        
        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }
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

        return back()->withErrors(['email' => 'Invalid Credentials'])->withInput();
    }
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'You have been logged out!');
    }
}