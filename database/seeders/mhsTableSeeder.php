<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert(array(
            [
                'nim' => '2307070',
                'nama' => 'Rafli',
                'prodi' => 'SIKC',
                'angkatan' => '2023'
            ],
            [
                'nim' => '2307072',
                'nama' => 'Malik',
                'prodi' => 'SIKC',
                'angkatan' => '2023'
            ],
        ));
    }
}
