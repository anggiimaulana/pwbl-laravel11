<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataMhsController extends Controller
{
    public function index() {
        return view('layouts/mahasiswa', compact('mahasiswa'));
    }
}
