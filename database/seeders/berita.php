<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class berita extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita')->insert(array(
            [
                'kode_berita' => '155',
                'slug' => 'leo-messi',
                'nama_berita' => 'Berkat Torehan Hattrick, Lionel Messi Kini Unggul 50 Gol Internasional dari Ronaldo',
                'content' => 'Bermain di Estadio El Monumental, Rabu (16/10/2024) pagi WIB, Messi menorehkan hattrick dalam kemenangan 6-0 Argentina atas Bolivia. Gol pertama Messi tercipta ketika laga baru berjalan 19 menit. Gol itu berawal dari upaya Lautaro Martinez yang merebut bola dari kaki Marcelo Suarez di sisi kiri pertahanan Bolivia. Si kulit bulat lalu jatuh tepat di kaki Lionel Messi. Setelahnya, La Pulga berlari ke dalam kotak penalti dan melepaskan tembakan ke tiang dekat untuk menaklukkan kiper Guillermo Viscarra.​'
            ],
        ));
    }
}
