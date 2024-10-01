<?php

use App\Http\Controllers\mhsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return "Yoooo whatsapp brooo!";
});

Route::post('/save', function () {
    echo "Belajar route post";
});

Route::post('/save', function () {
    echo "Belajar route post";
});

Route::post('/save', function () {
    echo "Belajar route post";
});

Route::put('/update', function () {
    echo "Belajar route PUT";
});

Route::delete('/delete', function () {
    echo "Belajar route PUT";
});

Route::match(['get', 'post'], '/kirim', function () {
    echo "Uji coba route method get dan post";
});

Route::any('/p', function () {
    echo "Bro belajar route ANY";
});

Route::get('/show/{id}', function ($id) {
    echo "Nilai GET parameter id = $id";
});

Route::get('/edit/{nama}', function ($nama) {
    echo "Nilai GET parameter nama = $nama";
})->where('nama', '[A-Za-z]+');

Route::get('/start', function () {
    echo "<a href='".route('coba')."'>Start</a>";
})->name('start');

Route::get('/coba', action: function () {
    echo "<a href='".route('start')."'>Kembali</a>";
})->name('coba');

Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');