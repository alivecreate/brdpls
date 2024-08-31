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
        Schema::create('ganesh_competition', function (Blueprint $table) {
            $table->id();
            $table->string('competition_type')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('status')->default('pending');
            
            // Polymorphic relationship
            $table->unsignedBigInteger('participant_id');
            $table->string('participant_type');  // This will store 'user' or 'group'
            
            $table->timestamps();

            // Indexes for better query performance
            $table->index(['participant_id', 'participant_type']);

            // Unique constraint to ensure a single participant per competition
            $table->unique(['participant_id', 'participant_type']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ganesh_competition');
    }
};
