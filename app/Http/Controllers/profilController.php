<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function index() {
        return view('layouts/profil', compact('profil'));
    }
}
