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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('brand_id')->nullable(false);
            $table->string('model')->nullable(false);
            $table->string('type')->nullable(false);
            $table->double('cylinder_volume')->nullable(true);
            $table->string('transmission_type')->nullable(true);
            $table->string('manufacturer_country')->nullable(true);
            $table->string('abs')->nullable(true);
            $table->string('fuel_type')->nullable(true);
            $table->string('max_speed')->nullable(true);
            $table->string('horse_power')->nullable(true);
            $table->string('torque')->nullable(true);
            $table->integer('fuel_capacity')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
