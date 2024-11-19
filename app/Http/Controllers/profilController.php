<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profilController extends Controller
{
    public function index() {
        $mhs = "Anggi Maulana";
        $title = "anggii.id";
        $slug = "profil";
        $data = profil::all();
        return view('layouts/profil', compact('mhs', 'title', 'slug', 'data'));
    }

    public function create()
    {
        $dataMhs = new profil();
        $dataMhs->nim = '2307067';
        $dataMhs->nama = 'Anggi Maulana';
        $dataMhs->prodi = 'D4 Sistem Informasi Kota Cerdas';
        $dataMhs->alamat = 'Desa Jatisawit Lor Kec. Jatibarang';
        $dataMhs->created_at = now();
        $dataMhs->updated_at = now();
        $dataMhs->save();

        echo "Data profil mahasiswa berhasil ditambahkan, <a href='/profil'>kembali</a>";
    }

    public function update() {
        profil::where('nim', '=', '2307059')->update([
            'nama' => 'Anggi Maulana S.Tr.Kom',
        ]);

        echo "Data mahasiswa berhasil diupdate, <a href='/mahasiswa'>kembali</a>";
    }

    public function destroy() {
        profil::where('nim', '=', '2307065')->delete();
        echo "Data mahasiswa berhasil dihapus, <a href='/mahasiswa'>kembali</a>";
    }
}
