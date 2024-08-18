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
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->string('title', 10)->nullable();
            $table->string('contact_person')->nullable();
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('cid')->nullable();
            $table->string('description')->nullable();
            $table->string('business_type')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('whatsapp1')->nullable();
            $table->string('whatsapp2')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('pincode')->nullable();
            $table->string('building')->nullable();
            $table->string('street')->nullable();
            $table->string('landmark')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('establishment_year')->nullable();
            $table->string('status')->nullable();
            $table->string('slug')->unique();
            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->nullable();

            $table->softDeletes();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('business');
    }
};
