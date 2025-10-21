<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('denda', function (Blueprint $table) {
            $table->id('id_denda');
            $table->unsignedBigInteger('id_peminjaman');
            $table->decimal('jumlah_denda', 10, 2)->default(0);
            $table->text('keterangan')->nullable();

            // Relasi ke tabel peminjaman
            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjaman')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('denda');
    }
};
