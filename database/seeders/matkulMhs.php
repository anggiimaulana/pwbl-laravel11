<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class matkulMhs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matkuls')->insert(array(
            [
                'kode_matkul' => 'SI43',
                'nama_matkul' => 'Pemrograman Berbasis Web Lanjut',
                'sks' => '3'
            ],
            [
                'kode_matkul' => 'SI31',
                'nama_matkul' => 'Analisis dan Perancangan Sistem Informasi',
                'sks' => '3'
            ],
            [
                'kode_matkul' => 'SI35',
                'nama_matkul' => 'Sistem Informasi Manajemen',
                'sks' => '3'
            ],
            [
                'kode_matkul' => 'SI23',
                'nama_matkul' => 'Keamanan Sistem Informasi',
                'sks' => '2'
            ],
        ));
    }
}
