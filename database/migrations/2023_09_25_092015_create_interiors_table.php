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
        Schema::create('interiors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('free_image');
            $table->string('paid_image');
            $table->integer('free');
            $table->string('category');
            $table->string('png_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interiors');
    }
};
