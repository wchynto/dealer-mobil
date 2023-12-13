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
        Schema::create('mobils', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_mobil');
            $table->string('merk');
            $table->string('warna');
            $table->string('plat_nomor');
            $table->string('tahun');
            $table->string('harga');
            $table->enum('status', ['tersedia', 'terjual']);
            $table->text('deskripsi');
            $table->string('kategori_mobil_id');
            $table->string('promo_id')->nullable();
            $table->timestamps();

            $table->foreign('kategori_mobil_id')->references('id')->on('kategori_mobils')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('promo_id')->references('id')->on('promos')->restrictOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
