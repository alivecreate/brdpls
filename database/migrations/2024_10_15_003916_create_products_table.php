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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->string('name'); // Name of the product
            $table->text('description')->nullable(); // Description of the product
            $table->text('image')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status with default active
            $table->decimal('price', 10, 2); // Price of the product
            $table->decimal('items')->default(1); // Price of the product
            $table->string('unit'); // Unit of measurement (e.g., kg, pieces)n
            $table->string('slug')->unique();

            $table->foreignId('product_category_id')->constrained('product_categories')->onDelete('cascade'); // Foreign key reference to product_category
           
            $table->foreignId('business_id')->constrained('business')->onDelete('cascade'); // Foreign key reference to product_category

            $table->timestamps(); // Created and updated timestamps

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
