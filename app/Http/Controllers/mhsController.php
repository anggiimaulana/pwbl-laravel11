<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
{
    public function index() {
        $mhs = "Anggi Maulana";
        return view('mhs/index', compact('mhs'));
    }

    public function show() {
        $mhs = ['Anggi Maulana', 'Erwan Kurniawan', 'Hafiz Surya'];
        return view('mhs/show', compact('mhs'));
    }
}
