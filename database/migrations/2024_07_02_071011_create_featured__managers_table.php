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
        Schema::create('featured__managers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portfolio_id')->references('id')->on('portfolios')->cascadeOnDelete();
            $table->integer('index');
            $table->integer('cols');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured__managers');
    }
};
