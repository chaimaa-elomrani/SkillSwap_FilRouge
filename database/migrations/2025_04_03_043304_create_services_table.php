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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique(); 
      
            $table->json('skills')->nullable(); // List of skills as JSON
            $table->enum('experience_level', ['Beginner', 'Intermediate', 'Expert'])->default('Beginner');
            $table->json('languages')->nullable(); // Preferred languages as JSON
            $table->integer('credits')->default(0); // Credits for transactions
            $table->string('location')->nullable(); // Optional location
            $table->string('portfolio_link')->nullable(); // Optional portfolio
            $table->boolean('is_premium')->default(false); // Premium status
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
