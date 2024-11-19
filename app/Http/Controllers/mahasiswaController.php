<?php

namespace App\Http\Controllers;

use App\Models\mhs;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    // Mencari file mahasiswa pada folder view
    public function index() {
        $mhs = "Anggi Maulana";
        $title = "anggii.id";
        $slug = "mahasiswa";
        $dataMhs = mhs::all();
        return view('content.mahasiswa', compact('mhs', 'title', 'slug', 'dataMhs'));
    }

    public function create() {
        $dataMhs = new mhs();
        $dataMhs->nim = '2307067';
        $dataMhs->nama = 'Hafiz Surya Wijaya';
        $dataMhs->prodi = 'D4 Sistem Informasi Kota Cerdas';
        $dataMhs->angkatan = '2023';
        $dataMhs->created_at = now();
        $dataMhs->updated_at = now();
        $dataMhs->save();

        mhs::insert(array(
            [
                'nim' => '2307061',
                'nama' => 'Bayu Rokhmatullah',
                'prodi' => 'D4 Sistem Informasi Kota Cerdas',
                'angkatan' => '2023',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '2307065',
                'nama' => 'Erwan Kurniawan',
                'prodi' => 'D4 Sistem Informasi Kota Cerdas',
                'angkatan' => '2023',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'nim' => '2307072',
            //     'nama' => 'Malik',
            //     'prodi' => 'D4 Sistem Informasi Kota Cerdas',
            //     'angkatan' => '2023',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]
            ));

        echo "Data mahasiswa berhasil ditambahkan, <a href='/mahasiswa'>kembali</a>";
    }

    public function update() {
        mhs::where('nim', '=', '2307059')->update([
            'nama' => 'Anggi Maulana S.Tr.Kom',
        ]);

        echo "Data mahasiswa berhasil diupdate, <a href='/mahasiswa'>kembali</a>";
    }

    public function destroy() {
        mhs::where('nim', '=', '2307065')->delete();
        echo "Data mahasiswa berhasil dihapus, <a href='/mahasiswa'>kembali</a>";
    }
}
