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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_type');
            $table->string('site_name')->nullable();
            $table->string('site_details')->nullable();
            $table->string('location')->nullable();
            $table->string('one_bhk')->nullable();
            $table->string('two_bhk')->nullable();
            $table->string('three_bhk')->nullable();
            $table->string('location_url')->nullable();
            $table->string('features_menities')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
