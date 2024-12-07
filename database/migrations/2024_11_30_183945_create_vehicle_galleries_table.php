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
        Schema::create('vehicle_galleries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('vehicle_id')->nullable(false);
            $table->string('type')->nullable(false);
            $table->string('source')->nullable(false);
            $table->string('path')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_galleries');
    }
};
