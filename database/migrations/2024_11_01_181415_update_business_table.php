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
        Schema::table('business', function (Blueprint $table) {
            $table->string('gst')->nullable()->after('establishment_year'); // Replace 'column_name' with the column after which you want to add 'gst'
            $table->string('lat')->nullable()->after('gst');
            $table->string('long')->nullable()->after('lat');
        });
    }

    public function down(): void
    {
        Schema::table('business', function (Blueprint $table) {
            $table->dropColumn('gst');
        });
    }
};
