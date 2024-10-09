<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // Mencari file home pada folder view
    public function index() {
        return view('home');
    }
}
