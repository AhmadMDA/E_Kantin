<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class QRISController extends Controller
{
    public function index()
    {
        return view('Customer.qris');
    }
}