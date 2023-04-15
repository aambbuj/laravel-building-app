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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_name');
            $table->string('phone_number');
            $table->string('upload_pan');
            $table->string('upload_aadher');
            $table->string('flat_number');
            $table->string('flat_area');
            $table->string('cover_car_parking_price');
            $table->string('open_car_parking_price');
            $table->string('additional_cost');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
