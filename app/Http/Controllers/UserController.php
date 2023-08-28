<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // display register form
    public function register()
    {
        return view('users.register');
    }

    // store new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required |min:3',
            'email' => 'required |email |unique:users,email',
            'password' => 'required | min:6 |max:50 |confirmed '
        ]);

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);
        // create user
        $user = User::create($formFields);
        // login user
        auth()->login($user);
        // redirect
        return redirect('/')->with('message', 'User created and logged in');
    }
    // show login form 
    public function login()
    {
        return view('users.login');
    }
    // login user

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required '
        ]);
        if (auth()->attempt($formFields)) {
            // create new session
            $request->session()->regenerate();
            // redirect
            return redirect('/')->with('message', 'You are now logged in');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
