<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodi;

class prodiController extends Controller
{
    // Mencari file mahasiswa pada folder view
    public function index() {
        // menampilkan data prodi
        $mhs = "Anggi Maulana";
        $title = "anggii.id";
        $slug = "prodi";
        $dataProdi = prodi::all();
        return view('content.prodi', compact('mhs', 'title', 'slug', 'dataProdi'));
    }

    public function create() {
        // eloquent ORM biasa
        $dataProdi = new prodi();
        $dataProdi->kode_prodi = 'D4SIKC';
        $dataProdi->nama_prodi = 'D4 Sistem Informasi Kota Cerdas';
        $dataProdi->jurusan = 'Ilmu Komputer';
        $dataProdi->created_at = now();
        $dataProdi->updated_at = now();
        $dataProdi->save();

        prodi::insert(array(
            [
                'kode_prodi' => 'D4RPL',
                'nama_prodi' => 'D4 Rekayasa Perangkat Lunak',
                'jurusan' => 'Ilmu Komputer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_prodi' => 'D3TI',
                'nama_prodi' => 'D3 Teknik Informatika',
                'jurusan' => 'Ilmu Komputer',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ));

        echo "Data prodi berhasil ditambahkan, <a href='/prodi'>kembali</a>";
    }

    public function update() {
        prodi::where('kode_prodi', '=', 'D4SIKC')->update([
            'nama_prodi' => 'D4 Smart City Information Systems',
        ]);

        echo "Data prodi berhasil diupdate, <a href='/prodi'>kembali</a>";
    }

    public function destroy() {
        prodi::where('kode_prodi', '=', 'D3TI')->delete();
        echo "Data prodi berhasil dihapus, <a href='/prodi'>kembali</a>";
        // return redirect('/prodi');
    }
}
