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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
			$table->string('site_name');
            $table->string('site_logo')->nullable();		
            $table->string('site_favicon')->nullable();
			$table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('description')->nullable();
            $table->string('site_keyword')->nullable();
            $table->string('copyrigt_text')->nullable();
			$table->string('defaut_language')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('footer_icon')->nullable();
            $table->string('facebook_url')->nullable();
			$table->string('twitter_url')->nullable();
			$table->string('instagram_url')->nullable();
			$table->string('whatsapp_url')->nullable();
			$table->string('youtube')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
