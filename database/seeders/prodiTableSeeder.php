<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class prodiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert(array(
            [
                'kode_prodi' => 'TI01',
                'nama_prodi' => 'D3 Teknik Informatika',
                'jurusan' => 'Teknik Informatika'
            ],
            [
                'kode_prodi' => 'TI02',
                'nama_prodi' => 'D4 Rekayasa Perangkat Lunak',
                'jurusan' => 'Teknik Informatika'
            ],
            [
                'kode_prodi' => 'TI03',
                'nama_prodi' => 'D4 Sistem Informasi Kota Cerdas',
                'jurusan' => 'Teknik Informatika'
            ],
            [
                'kode_prodi' => 'T01',
                'nama_prodi' => 'D3 Teknik Mesin',
                'jurusan' => 'Teknik'
            ],
            [
                'kode_prodi' => 'T02',
                'nama_prodi' => 'D4 Perancangan Manufaktur',
                'jurusan' => 'Teknik'
            ],
            [
                'kode_prodi' => 'T03',
                'nama_prodi' => 'D3 Teknik Pendingin dan Tata ',
                'jurusan' => 'Teknik'
            ],
            [
                'kode_prodi' => 'T04',
                'nama_prodi' => 'D4 Teknologi Rekayasa Instrumentasi dan Kontrol',
                'jurusan' => 'Teknik'
            ],
            [
                'kode_prodi' => 'K01',
                'nama_prodi' => 'D3 Keperawatan',
                'jurusan' => 'Kesehatan'
            ],
        ));
    }
}
