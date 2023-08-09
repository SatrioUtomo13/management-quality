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
        Schema::create('berats', function (Blueprint $table) {
            $table->id();
            $table->integer('berat_aktual');
            $table->integer('berat_awal');
            $table->integer('berat_akhir');
            $table->integer('rsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berats');
    }
};
