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
        Schema::create('ganesh_competition_payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')->nullable(); // Foreign key to the groups table
            $table->unsignedBigInteger('competition_id')->nullable(); // Foreign key to the competitions table

            $table->string('receipt')->nullable();
            $table->string('amount')->nullable();
            $table->string('razorpay_payment_id')->nullable();
            $table->string('razorpay_order_id')->nullable();
            $table->string('name')->nullable();
            
            $table->string('status')->nullable();

            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key to the users table
            $table->timestamps();
            
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->foreign('competition_id')->references('id')->on('ganesh_competition')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ganesh_competition_payment');
    }
};
