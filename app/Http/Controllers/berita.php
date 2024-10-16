<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berita extends Controller
{
    public function index() {
        return view('content/home', compact('home'));
    }
}
