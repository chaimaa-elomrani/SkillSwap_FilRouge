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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('bio');
            $table->string('location');
            $table->string('phone_number');
            $table->string('image')->nullable();
            $table->enum('status', ['available', 'Limited Availability', 'unavailable'])->default('available');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('domain_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
