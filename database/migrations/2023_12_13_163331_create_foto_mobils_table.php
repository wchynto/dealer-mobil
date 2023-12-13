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
        Schema::create('foto_mobils', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('foto');
            $table->text('deskripsi');
            $table->string('mobil_id');
            $table->timestamps();

            $table->foreign('mobil_id')->references('id')->on('mobils')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_mobils');
    }
};
