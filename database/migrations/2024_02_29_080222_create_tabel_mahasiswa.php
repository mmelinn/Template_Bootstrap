<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabel_mahasiswa', function (Blueprint $table) {
            $table->id('id_mhs');
            $table->string('nama_mahasiswa');
            $table->string('alamat');
            $table->date('ttl');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_mahasiswa');
    }
};
