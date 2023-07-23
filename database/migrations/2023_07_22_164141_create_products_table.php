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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('item', 10);
            $table->string('resin', 10);
            $table->string('type', 10);
            $table->integer('rc_r');
            $table->integer('rc_c');
            $table->integer('rc_l');
            $table->integer('vc_r');
            $table->integer('vc_l');
            $table->char('speed', 2);
            $table->integer('berat_aktual');
            $table->integer('berat_awal');
            $table->integer('berat_akhir');
            $table->integer('rsi')->nullable();
            $table->integer('qty_transisi')->nullable();
            $table->integer('qty_lot');
            $table->integer('qty_total');
            $table->char('wind', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
