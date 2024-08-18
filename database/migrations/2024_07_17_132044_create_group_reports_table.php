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
        Schema::create('group_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reportable_id');
            $table->string('reportable_type');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('group_id');
            $table->string('image')->nullable();
            $table->text('reason');
            $table->text('description')->nullable();
            $table->string('note')->nullable();
            $table->string('status', 20)->default('pending')->nullable();
        
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_reports');
    }
};
