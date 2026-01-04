<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('kategori',['fasilitas','akademik','keamanan','lainnya'])->default('lainnya');
            $table->text('keluhan');
            $table->enum('tingkat_kepentingan',['cukup_penting','penting','sangat_penting'])->default('cukup_penting');
            $table->string('bukti')->nullable();
            $table->enum('status',['diterima','diproses','selesai'])->default('diterima');
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
