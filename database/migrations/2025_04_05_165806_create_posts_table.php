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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title', 60);
            $table->text('description');
            $table->string('category'); 
            $table->string('experience_level'); 
            $table->string('target_audience')->nullable();
            $table->json('languages')->nullable();
            $table->integer('credit_cost')->default(0);
            $table->string('completion_time');
            $table->string('time_unit')->default('hours');
            $table->text('additional_notes')->nullable();
            $table->timestamps();
        });

        
        Schema::create('service_matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->foreignId('requester_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('status', ['pending', 'accepted', 'rejected', 'completed'])->default('pending');
            $table->integer('match_score')->nullable(); // Store the match percentage/score
            $table->text('request_message')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
         
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
