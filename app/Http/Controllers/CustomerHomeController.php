<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerHomeController extends Controller
{
    public function home()
    {
        // Add your logic here
        return view('Customer.home'); // or whatever view you want to return
    }
}
