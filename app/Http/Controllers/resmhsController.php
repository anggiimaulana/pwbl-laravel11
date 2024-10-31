<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resmhsController extends Controller
{
    public function index()
    {
        $mhs = "Anggi Maulana";
        $title = "Mahasiswa D4 Sistem Informasi Kota Cerdas";
        $slug = "mahasiswa";
        $dataMhs = $this->show();
        return view('controller.mahasiswa', compact('mhs', 'title', 'slug', 'dataMhs'));
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
    public function show(string $id = "")
    {
        $id = array(
            [
                'nim' => '2307059',
                'nama' => 'Anggi Maulana',
                'prodi' => 'D4 Sistem Informasi Kota Cerdas',
            ],
            [
                'nim' => '2307061',
                'nama' => 'Bayu Rokhmatullah',
                'prodi' => 'D4 Sistem Informasi Kota Cerdas',
            ],
            [
                'nim' => '2307065',
                'nama' => 'Erwan Kurniawan',
                'prodi' => 'D4 Sistem Informasi Kota Cerdas',
            ],
            [
                'nim' => '2307072',
                'nama' => 'Malik',
                'prodi' => 'D4 Sistem Informasi Kota Cerdas',
            ],
            [
                'nim' => '2307071',
                'nama' => 'Abiyi',
                'prodi' => 'D4 Sistem Informasi Kota Cerdas',
            ],
        );

        return $id;
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
