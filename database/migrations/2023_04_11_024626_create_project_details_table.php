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
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();
            $table->string('projects_id');
            $table->string('type_of_bhk')->nullable();
            $table->string('bhk_type')->nullable();
            $table->string('bhk_bedroom')->nullable();
            $table->string('bhk_bathroom')->nullable();
            $table->string('bhk_sqft')->nullable();
            $table->string('bakgroung_image')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_details');
    }
};
