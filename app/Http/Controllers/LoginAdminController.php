<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Routing\Controller;

class LoginAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginAdmin');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba untuk login
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            // Jika berhasil login, redirect ke halaman yang dituju
            return redirect()->intended(route('Admin.BerandaAdmin'));
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
