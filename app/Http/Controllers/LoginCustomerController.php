<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginCustomerController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginCustomer');
    }
    function Login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
        ]);
        $infologin =[
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)){
            return redirect()->route('Customer.home');
        }else{
            return 'gagal';
        }
    }
   
}
