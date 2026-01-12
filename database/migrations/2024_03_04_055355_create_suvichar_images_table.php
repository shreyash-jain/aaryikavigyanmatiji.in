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
        Schema::create('suvichar_images', function (Blueprint $table) {
            $table->id();
			$table->string('image_url');
			$table->string('title')->nullable();
			$table->enum('type', ['1', '2'])->default('1');		
			$table->enum('status', ['1', '2'])->default('2');		
			$table->string('show_home')->nullable();		
			$table->string('order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suvichar_images');
    }
};
