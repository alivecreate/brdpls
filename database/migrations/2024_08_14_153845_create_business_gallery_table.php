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

        

        Schema::create('business_gallery', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->morphs('imageable'); // This creates `imageable_id` and `imageable_type` columns
            $table->string('type')->nullable();
            $table->timestamps();
    
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_gallery');
    }
};
