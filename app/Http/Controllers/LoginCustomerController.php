<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginCustomerController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginCustomer');
    }

    public function postlogin(Request $request)
    {
       if(Auth::attempt($request->only('nama','password'))){
        return redirect('/homepage');
    }
    return redirect('/');
    }
}
