<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profil extends Controller
{
    public function index()
    {
        // menampilkan data diri
        $mhs = "Anggi Maulana";
        $title = "anggii.id";
        $slug = "profil";
        $data = DB::table('profil')->get();
        return view('content.profil', compact('mhs', 'title', 'slug', 'data'));

        // // controller profil
        // $mhs = "Anggi Maulana";
        // $title = "anggii.id";
        // $slug = "profil";
        // $data = $this->show();
        // return view('controller.profil', compact('mhs', 'title', 'slug', 'data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menambahkan data diri
        DB::table('profil')->insert([
            'nama' => 'Anggi Maulana',
            'nim' => '2307059',
            'prodi' => 'D4SIKC',
            'alamat' =>  'Desa Jatisawit Lor Kec. Jatibarang'
        ]);

        echo "Data profil berhasil ditambahkan";
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $data = "")
    {
        // // data diri saya
        // $data = array(
        //     [
        //         'nama' => 'Anggi Maulana', 
        //         'nim' => '2307059', 
        //         'kelas' => 'D4SIKC2C', 
        //         'prodi' => 'D4 Sistem Informasi Kota Cerdas'
        //     ]
        // );

        // return $data;
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
        // update data profil
        DB::table('profil')->where('nim', $id)->update([
            'prodi' => $request->input('prodi', 'D4TRIK')
        ]);

        echo "Data profil berhasil diupdate";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // hapus data profil
        DB::table('profil')->where('nim', $id)->delete();
        echo "Data profil berhasil dihapus";
    }
}
