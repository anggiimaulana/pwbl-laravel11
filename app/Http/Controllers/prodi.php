<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prodi extends Controller
{
    // controller prodi
    public function index()
    {
        // menampilkan data prodi tugas 10
        $mhs = "Anggi Maulana";
        $title = "anggii.id";
        $slug = "prodi";
        $prodi = DB::table('prodi')->get();
        return view('content.prodi', compact('mhs', 'title', 'slug', 'prodi'));

        // // controller prodi
        // $mhs = "Anggi Maulana";
        // $title = "anggii.id";
        // $slug = "prodi";
        // $prodi = $this->show();
        // return view('controller.prodi', compact('mhs', 'title', 'slug', 'prodi'));
    
    }


    public function create()
    {
        // menambahkan data prodi tugas 10
        // DB::table('prodi')->insert(
        //     ['kode_prodi' => 'D4RJK', 'nama_prodi' => 'D4 Rekayasa Jaringan Komputer', 'jurusan' => 'Teknik Informatika']
        // );

        echo "Data prodi berhasil ditambahkan";
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $prodi = "")
    {
        // // data prodi
        // $prodi = array(
        //     ['nama_prodi' => 'Teknik Informatika', 'jenjang' => 'D3', 'jurusan' => 'Teknik Informatika'],
        //     ['nama_prodi' => 'Teknik Mesin', 'jenjang' => 'D3', 'jurusan' => 'Teknik'],
        //     ['nama_prodi' => 'Keperawatan', 'jenjang' => 'D3', 'jurusan' => 'Kesehatan'],
        //     ['nama_prodi' => 'Rekayasa Perangkat Lunak', 'jenjang' => 'D4', 'jurusan' => 'Teknik Informatika'],
        //     ['nama_prodi' => 'Perancangan Manufaktur', 'jenjang' => 'D4', 'jurusan' => 'Teknik'],
        //     ['nama_prodi' => 'Teknik Pendingin dan Tata Udara', 'jenjang' => 'D3', 'jurusan' => 'Teknik'],
        //     ['nama_prodi' => 'Sistem Informasi Kota Cerdas', 'jenjang' => 'D4', 'jurusan' => 'Teknik Informatika'],
        //     ['nama_prodi' => 'Teknologi Rekayasa Instrumentasi dan Kontrol', 'jenjang' => 'D4', 'jurusan' => 'Teknik'],
        // );

        // return $prodi;
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        // update data prodi
        DB::table('prodi')->where('kode_prodi', $id)->update([
            'jurusan' => $request->input('jurusan', 'Ilmu Komputer')
        ]);

        echo "Data prodi berhasil diupdate";
    }


    public function destroy(string $id)
    {
        // hapus data prodi
        DB::table('prodi')->where('kode_prodi', $id)->delete();
    }
}
