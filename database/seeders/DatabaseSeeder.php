<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(mhsTableSeeder::class);
        $this->call(matkulMhs::class);

        // Panggil seeder prodi
        $this->call(prodiTableSeeder::class);
    }
}
