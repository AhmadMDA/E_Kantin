<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LogOutController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginCustomer');
    }
}
