<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\prodiController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});

Route::get('/beranda', function () {
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

// Membuat route untuk masing-masing controller
Route::get('/home', [homeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [mahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/prodi', action: [prodiController::class, 'index'])->name('prodi');

Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');
Route::get('/mhs/show', [mhsController::class, 'show'])->name('mhs-show');

Route::get('/', function() {
    $title = "anggii.id";
    $slug = "home";
    $content = "Ini adalah konten anggii.id";
    return view('/layouts/home', compact('title', 'slug', 'content'));
});

Route::get('/home', function() {
    $title = "anggii.id";
    $slug = "home";
    $content = "Ini adalah konten anggii.id";
    return view('/layouts/home', compact('title', 'slug', 'content'));
});

Route::get('/profil', function() {
    $title = "anggii.id";
    $slug = "profil";
    $data = ['nama' => 'Anggi Maulana', 'nim' => '2307059', 'kelas' => 'D4SIKC2C', 'prodi' => 'D4 Sistem Informasi Kota Cerdas'];
    return view('/layouts/profil', compact('title', 'slug', 'data'));
});

Route::get('/mahasiswa', function() {
    $title = "anggii.id";
    $slug = "mahasiswa";
    
    // Array data mahasiswa
    $mahasiswa = [
        ['nama' => 'Anggi Maulana', 'nim' => '2307059', 'kelas' => 'D4SIKC2C', 'asal-kota' => 'Indramayu'],
        ['nama' => 'Erwan Kurniawan', 'nim' => '2307065', 'kelas' => 'D4SIKC2C', 'asal-kota' => 'Cirebon'],
        ['nama' => 'Muhammad Malik', 'nim' => '2307072', 'kelas' => 'D4SIKC2C', 'asal-kota' => 'Subang'],
        ['nama' => 'Abiyi', 'nim' => '2307071', 'kelas' => 'D4SIKC2C', 'asal-kota' => 'Indramayu'],
        ['nama' => 'Vanes Hasan', 'nim' => '2307081', 'kelas' => 'D4SIKC2C', 'asal-kota' => 'Yogyakarta']
    ];

    return view('/layouts/mahasiswa', compact('title', 'slug', 'mahasiswa'));
});

Route::get('/prodi', function() {
    $title = "anggii.id";
    $slug = "prodi";
    
    // Array data prodi
    $prodi = [
        ['nama_prodi' => 'Sistem Informasi Kota Cerdas', 'jenjang' => 'D4', 'jurusan' => 'Teknik Informatika'],
        ['nama_prodi' => 'Teknik Informatika', 'jenjang' => 'D3', 'jurusan' => 'Teknik Informatika'],
        ['nama_prodi' => 'Rekayasa Perangkat Lunak', 'jenjang' => 'D4', 'jurusan' => 'Teknik Informatika'],
        ['nama_prodi' => 'Keperawatan', 'jenjang' => 'D3', 'jurusan' => 'Kesehatan'],
        ['nama_prodi' => 'Teknik Mesin', 'jenjang' => 'D3', 'jurusan' => 'Teknik'],
        ['nama_prodi' => 'Perancangan Manufaktur', 'jenjang' => 'D4', 'jurusan' => 'Teknik'],
        ['nama_prodi' => 'Teknik Pendingin dan Tata Udara', 'jenjang' => 'D3', 'jurusan' => 'Teknik'],
        ['nama_prodi' => 'Teknologi Rekayasa Instrumentasi dan Kontrol', 'jenjang' => 'D4', 'jurusan' => 'Teknik'],
    ];

    return view('/layouts/prodi', compact('title', 'slug', 'prodi'));
});