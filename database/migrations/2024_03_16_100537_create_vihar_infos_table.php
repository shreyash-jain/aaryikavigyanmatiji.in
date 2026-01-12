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
        Schema::create('vihar_infos', function (Blueprint $table) {
            $table->id();
			$table->string('title');
			$table->string('address');
			$table->string('location')->nullable();	
			$table->enum('status', ['0', '1'])->default('0');		
			$table->string('start_date')->nullable();		
			$table->string('end_date')->nullable();	
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vihar_infos');
    }
};
