<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    // Mencari file mahasiswa pada folder view
    public function index() {
        return view('mahasiswa');
    }
}
