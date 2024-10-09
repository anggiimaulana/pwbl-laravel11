<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Membuat skema tabel prodi
        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_prodi')->unique();
            $table->string('nama_prodi');
            $table->string('jurusan');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};
