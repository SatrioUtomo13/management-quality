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
        Schema::create('idn_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->char('shift', 1);
            $table->string('item', 10);
            $table->string('resin', 10);
            $table->char('speed', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idn_products');
    }
};
