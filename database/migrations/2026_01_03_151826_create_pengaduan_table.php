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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->enum('kategori',['fasilitas','akademik','keamanan','lainnya'])->default('lainnya');
            $table->string('keluhan');
            $table->enum('tingkat_kepentingan',['cukup_penting','penting','sangat_penting'])->default('cukup_penting');
            $table->string('bukti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
