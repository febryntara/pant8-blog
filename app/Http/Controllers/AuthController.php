<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signinView()
    {
        return view('auth.signin', [
            "title" => "Sign In",
            "where" => "signin"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:8|max:18',
            'password' => 'required|min:8|max:18'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('errorMessage', 'Login Failed!');
    }

    public function signupView()
    {
        return view('auth.signup', [
            "title" => "Sign Up",
            "where" => "signup"
        ]);
    }

    public function signupData(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'username' => 'required|unique:users|min:8|max:18',
            'password' => 'required|min:8|max:18',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/sign-in')->with('success', 'You have successfully registered! Please sign in.');
    }

    public function signout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
