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
    protected function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'customer', // check for customer role
        ];
    }
}
