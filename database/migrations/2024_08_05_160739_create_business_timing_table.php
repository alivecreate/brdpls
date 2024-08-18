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
        Schema::create('business_timing', function (Blueprint $table) {
           
                $table->id();
                $table->unsignedBigInteger('business_id');
                $table->enum('day', [
                    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
                ]);
                $table->string('open_time', 15)->nullable();
                $table->string('close_time', 15)->nullable();
                $table->timestamps();
                
                // Foreign key constraint
                $table->foreign('business_id')->references('id')->on('business')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_timing');
    }
};
