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
        Schema::create('mobil_favorits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('mobil_id');
            $table->string('user_id');
            $table->timestamps();

            $table->foreign('mobil_id')->references('id')->on('mobils')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil_favorits');
    }
};
