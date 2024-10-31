<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswa extends Controller
{
    public function index() {
        $mhs = "Anggi Maulana";
        $title = "Mahasiswa D4 Sistem Informasi Kota Cerdas";
        $slug = "mahasiswa";
        $dataMhs = $this->dataMahasiswa();
        return view('controller.mahasiswa', compact('mhs', 'title', 'slug', 'dataMhs'));
    }

    public function dataMahasiswa() {
        $dataMhs = array(
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

        return $dataMhs;
    }
}
