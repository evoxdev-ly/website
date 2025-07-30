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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            // Website info
            $table->string('logo_header');
            $table->string('logo_footer');
            $table->text('about_us')->nullable();
            $table->string('phone', 11)->nullable();
            $table->string('contact_email')->nullable();

            $table->text('metatag_description')->nullable();
            $table->json('metatag_keywords')->nullable();

            // Smtp
            $table->string('smtp_host');
            $table->string('smtp_port');
            $table->string('smtp_username');
            $table->string('smtp_password');
            $table->enum('smtp_encryption', ['tls', 'ssl']);
            $table->string('smtp_from_address');
            $table->string('smtp_from_name');
            $table->string('email_receiver');

            // Social media
            $table->string('social_facebook')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_linkedin')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_youtube')->nullable();
            $table->string('social_github')->nullable();
            $table->string('social_whatsapp')->nullable();
            $table->string('whatsapp_floating')->nullable();

            // Extra
            $table->text('head')->nullable();
            $table->text('script')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
