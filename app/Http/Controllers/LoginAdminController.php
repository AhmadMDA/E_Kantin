<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginAdmin');
    }

    public function login(Request $request)
    {
        // Login logic goes here
        // For example:
        $credentials = $request->only(['username', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return back()->withErrors(['username' => 'Invalid credentials']);
    }
}
