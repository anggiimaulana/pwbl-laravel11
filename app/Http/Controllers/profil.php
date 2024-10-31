<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profil extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = "Anggi Maulana";
        $title = "anggii.id";
        $slug = "profil";
        $data = $this->show();
        return view('controller.profil', compact('mhs', 'title', 'slug', 'data'));

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
    public function show(string $data = "")
    {
        $data = array(
            [
                'nama' => 'Anggi Maulana', 
                'nim' => '2307059', 
                'kelas' => 'D4SIKC2C', 
                'prodi' => 'D4 Sistem Informasi Kota Cerdas'
            ]
        );

        return $data;
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
