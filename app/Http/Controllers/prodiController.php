<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index() {
        // return "<h1>Page > Prodi</h1>";
        return view('prodi');
    }
}
