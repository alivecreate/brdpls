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
        Schema::create('live_competition_status', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->enum('status', ['live', 'ended', 'scheduled'])->default('scheduled'); // Status field with default value
            $table->timestamp('start_time')->nullable(); // Start time of the competition
            $table->timestamp('end_time')->nullable(); // End time of the competition
            $table->timestamps(); // Created at and Updated at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('live_competition_status');
    }
};
