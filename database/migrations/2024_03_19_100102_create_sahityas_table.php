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
        Schema::create('sahityas', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('title');
			$table->string('category');
			$table->string('image')->nullable();	
			$table->string('file')->nullable();	
			$table->string('file_type')->nullable();	
			$table->integer('orders')->nullable();	
			$table->integer('show_home')->nullable();
			$table->enum('status', ['1', '2'])->default('2');	
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sahityas');
    }
};
