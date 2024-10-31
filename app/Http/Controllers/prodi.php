<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = "Anggi Maulana";
        $title = "anggii.id";
        $slug = "prodi";
        $prodi = $this->show();
        return view('controller.prodi', compact('mhs', 'title', 'slug', 'prodi'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $prodi = "")
    {
        $prodi = array(
            ['nama_prodi' => 'Teknik Informatika', 'jenjang' => 'D3', 'jurusan' => 'Teknik Informatika'],
            ['nama_prodi' => 'Teknik Mesin', 'jenjang' => 'D3', 'jurusan' => 'Teknik'],
            ['nama_prodi' => 'Keperawatan', 'jenjang' => 'D3', 'jurusan' => 'Kesehatan'],
            ['nama_prodi' => 'Rekayasa Perangkat Lunak', 'jenjang' => 'D4', 'jurusan' => 'Teknik Informatika'],
            ['nama_prodi' => 'Perancangan Manufaktur', 'jenjang' => 'D4', 'jurusan' => 'Teknik'],
            ['nama_prodi' => 'Teknik Pendingin dan Tata Udara', 'jenjang' => 'D3', 'jurusan' => 'Teknik'],
            ['nama_prodi' => 'Sistem Informasi Kota Cerdas', 'jenjang' => 'D4', 'jurusan' => 'Teknik Informatika'],
            ['nama_prodi' => 'Teknologi Rekayasa Instrumentasi dan Kontrol', 'jenjang' => 'D4', 'jurusan' => 'Teknik'],
        );

        return $prodi;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
