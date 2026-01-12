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
        Schema::create('oshadhi_manjooshas', function (Blueprint $table) {
            $table->id();			
			$table->string('name');
			$table->text('short_description');
			$table->text('description')->nullable();
			$table->enum('status', ['1', '2'])->default('2');		
			$table->integer('order')->nullable();	
			$table->integer('show_home')->nullable();	
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oshadhi_manjooshas');
    }
};
