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
        Schema::create('params', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('item', 10)->unique();
            $table->string('resin', 10);
            $table->string('type', 10);
            $table->integer('max_rc');
            $table->integer('min_rc');
            $table->integer('max_vc');
            $table->integer('min_vc');
            $table->char('wind', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('params');
    }
};
