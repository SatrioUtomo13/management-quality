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
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idn_product_id');

            $table->decimal('rc_r', 4, 1);
            $table->decimal('rc_c', 4, 1);
            $table->decimal('rc_l', 4, 1);
            $table->decimal('vc_r', 3, 1);
            $table->decimal('vc_l', 3, 1);
            $table->timestamps();

            $table->foreign('idn_product_id')->references('id')->on('idn_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checks');
    }
};
