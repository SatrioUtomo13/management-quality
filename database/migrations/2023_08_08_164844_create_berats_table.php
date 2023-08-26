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
            $table->unsignedBigInteger('idn_product_id');

            $table->integer('berat_aktual');
            $table->integer('berat_awal');
            $table->integer('berat_akhir');
            $table->integer('rsi')->nullable();
            $table->timestamps();

            $table->foreign('idn_product_id')->references('id')->on('idn_products')->onDelete('cascade');
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
