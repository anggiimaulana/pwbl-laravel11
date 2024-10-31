<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resmhsController extends Controller
{
    public function index()
    {
        // menampilkan data mahasiswa
        $mhs = "Anggi Maulana";
        $title = "Mahasiswa D4 Sistem Informasi Kota Cerdas";
        $slug = "mahasiswa";
        $dataMhs = DB::table('mahasiswa')->get();
        return view('content.mahasiswa', compact('mhs', 'title', 'slug', 'dataMhs'));

        // // controller resmhs
        // $mhs = "Anggi Maulana";
        // $title = "Mahasiswa D4 Sistem Informasi Kota Cerdas";
        // $slug = "mahasiswa";
        // $dataMhs = $this->show();
        // return view('controller.mahasiswa', compact('mhs', 'title', 'slug', 'dataMhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menambahkan data mahasiswa
        DB::table('mahasiswa')->insert([
            'nim' => 2307063,
            'nama' => 'Dea Nanda Dwijayanti',
            'prodi' => 'D4RPL',
            'angkatan' => 2023
        ]);

        echo "data mahasiswa berhasil ditambahkan";
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
        // data mahasiswa
        // $id = array(
        //     [
        //         'nim' => '2307059',
        //         'nama' => 'Anggi Maulana',
        //         'prodi' => 'D4 Sistem Informasi Kota Cerdas',
        //     ],
        //     [
        //         'nim' => '2307061',
        //         'nama' => 'Bayu Rokhmatullah',
        //         'prodi' => 'D4 Sistem Informasi Kota Cerdas',
        //     ],
        //     [
        //         'nim' => '2307065',
        //         'nama' => 'Erwan Kurniawan',
        //         'prodi' => 'D4 Sistem Informasi Kota Cerdas',
        //     ],
        //     [
        //         'nim' => '2307072',
        //         'nama' => 'Malik',
        //         'prodi' => 'D4 Sistem Informasi Kota Cerdas',
        //     ],
        //     [
        //         'nim' => '2307071',
        //         'nama' => 'Abiyi',
        //         'prodi' => 'D4 Sistem Informasi Kota Cerdas',
        //     ],
        // );

        // return $id;
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        // update data mahasiswa
        DB::table('mahasiswa')->where('nim', $id)->update([
            'prodi' => $request->input('prodi', 'D4TRIK')
        ]);

        echo "Data mahasiswa berhasil diupdate";
    }

    public function destroy(string $id)
    {
        // hapus data mahasiswa
        DB::table('mahasiswa')->where('nim', $id)->delete();
        echo "Data mahasiswa berhasil dihapus";
    }
}
