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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
			$table->string('background_top_image')->nullable();           
            $table->string('banner_image')->nullable();
			$table->string('suvichar_background_image')->nullable();
			$table->string('suvichar_icon_image')->nullable();
			$table->string('first_suvichaar')->nullable();
			$table->string('second_suvichaar')->nullable();
			$table->string('third_suvichaar')->nullable();
			$table->string('suvichar_image')->nullable();
            $table->string('literature_description')->nullable();
            $table->string('youtube_video_title')->nullable();
            $table->string('youtube_video_url')->nullable();
            $table->string('thumbnail')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
