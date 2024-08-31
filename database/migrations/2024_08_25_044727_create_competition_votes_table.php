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
        Schema::create('competition_votes', function (Blueprint $table) {

            // $table->id();
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // // Polymorphic columns for the votable entity
            // $table->morphs('votable');

            // // Foreign key to competition categories table
            // $table->foreignId('competition_category_id')->constrained('ganesh_competition_category')->onDelete('cascade');

            // // Foreign key to specific competition within the category
            // // $table->foreignId('competition_id')->constrained('ganesh_competition')->onDelete('cascade');

            // // Unique constraint to ensure one vote per user per competition within a category
            // $table->unique(['user_id', 'competition_category_id', 'competition_id']);

            // $table->timestamps();


            
            // Below Old Migration
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Polymorphic columns for the votable entity
            $table->morphs('votable');

            // Foreign key to competition categories table
            $table->foreignId('competition_category_id')->constrained('ganesh_competition_category')->onDelete('cascade');
            $table->foreignId('competition_id')->constrained('ganesh_competition')->onDelete('cascade');

            // Unique constraint to ensure one vote per user per competition category
            $table->unique(['user_id', 'competition_category_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competition_votes');
    }
};
