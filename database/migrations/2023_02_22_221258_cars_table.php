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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Brand');
            $table->foreignId("Category");
            $table->string("Model");
            $table->string("horespower");
            $table->string("engine");
            $table->string("Drivetrain");
            $table->string("Consumption");
            $table->string("weight");
            $table->string("speed");
            $table->string("pricefornew");
            $table->string("priceforused");
            $table->string("Year");
            $table->string("images");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
