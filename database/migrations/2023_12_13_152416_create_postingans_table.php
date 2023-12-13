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
        Schema::create('postingans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('judul');
            $table->string('foto');
            $table->text('isi_postingan');
            $table->string('kategori_postingan_id');
            $table->timestamps();

            $table->foreign('kategori_postingan_id')->references('id')->on('kategori_postingans')->restrictOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postingans');
    }
};
