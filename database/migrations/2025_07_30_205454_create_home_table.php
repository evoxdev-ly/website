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
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title', 100)->nullable();
            $table->string('hero_subtitle')->nullable();
            $table->text('hero_description')->nullable();

            $table->string('mission_title');
            $table->text('mission_text');
            $table->string('vision_title');
            $table->text('vision_text');
            $table->string('value_title');
            $table->text('value_text');

            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_id')->constrained('home')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->text('link');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_id')->constrained('home')->onDelete('cascade');
            $table->string('image');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('link')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('services');
        Schema::dropIfExists('home');
    }
};
