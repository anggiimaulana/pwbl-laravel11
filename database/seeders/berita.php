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
                'kode_berita' => 'SI43',
                'slug' => 'timnas-hari-ini',
                'nama_berita' => 'Timnas Hari Ini',
                'content' => 'Hari ini, Timnas Indonesia baru saja mengalami kekalahan 1-2 melawan China dalam lanjutan putaran ketiga Kualifikasi Piala Dunia 2026 zona Asia. Pertandingan yang digelar di Qingdao, China, ini merupakan kekalahan perdana Indonesia dalam kualifikasi. Kekalahan ini membuat posisi Indonesia dalam grup semakin sulit, namun harapan untuk lolos ke Piala Dunia masih terbuka dengan sisa pertandingan. Setelah kekalahan ini, peringkat FIFA Timnas Indonesia turun ke posisi 130 dunia​'
            ],
            [
                'kode_berita' => '1343',
                'slug' => 'timnas-hari-kemaren',
                'nama_berita' => 'Timnas Hari kemaren',
                'content' => 'Hari ini, Timnas Indonesia baru saja mengalami kekalahan 1-2 melawan China dalam lanjutan putaran ketiga Kualifikasi Piala Dunia 2026 zona Asia. Pertandingan yang digelar di Qingdao, China, ini merupakan kekalahan perdana Indonesia dalam kualifikasi. Kekalahan ini membuat posisi Indonesia dalam grup semakin sulit, namun harapan untuk lolos ke Piala Dunia masih terbuka dengan sisa pertandingan. Setelah kekalahan ini, peringkat FIFA Timnas Indonesia turun ke posisi 130 dunia​'
            ],
        ));
    }
}
