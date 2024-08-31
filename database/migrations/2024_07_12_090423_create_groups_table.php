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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('cid')->nullable();
            $table->string('name')->nullable();
            $table->string('decoration')->nullable();
            $table->string('organizer')->nullable();
            $table->string('description')->nullable();
            $table->string('category')->nullable();
            $table->string('privacy')->nullable();
            $table->text('cover')->nullable();
            $table->string('year')->nullable();
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('city')->nullable();
            $table->string('status')->nullable();
            $table->string('slug')->nullable();
            
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
