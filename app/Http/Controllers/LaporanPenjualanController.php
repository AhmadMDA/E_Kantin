<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LaporanPenjualanController extends Controller
{
    public function index()
    {
        return view('Admin.LaporanPenjualan');
    }
}
