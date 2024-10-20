<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Asegúrate de tener la vista dashboard en resources/views/dashboard.blade.php
    }
}

