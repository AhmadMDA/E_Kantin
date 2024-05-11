<?php

// app/Http/Controllers/DescriptionProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DescriptionProductController extends Controller
{
    public function showDescription()
    {
        return view('Customer.descriptionproduct'); // Pastikan view yang dipanggil adalah 'descriptionproduct'
    }
}

