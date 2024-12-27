<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegisterForm()
    {
        return view('register'); // Ensure this matches the name of your registration view file
    }

    /**
     * Handle the registration request.
     */
    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:15|unique:users,phone_no',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to login with success message
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('login'); // Ensure this matches the name of your login view file
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            // Authentication successful
            $request->session()->regenerate();
            return redirect()->route('home'); // Adjust this to the intended post-login route
        }

        // Authentication failed
        return back()->withErrors([
            'error' => 'Invalid name or password.',
        ]);
    }
}

