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
        Schema::create('sanghast_aaryikas', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('old_name');
            $table->string('father_name');			
			$table->string('mother_name');
            $table->string('image')->nullable();
            $table->string('brother_sister')->nullable();
            $table->string('husband_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('secular_education')->nullable();
			$table->string('marriage')->nullable();
            $table->string('homelessness')->nullable();
            $table->string('holding_the_statue')->nullable();
            $table->string('aryika_diksha')->nullable();
			$table->string('initiation_guru')->nullable();
			$table->string('interests')->nullable();
			$table->string('specialty')->nullable();
			$table->string('initiated_disciples')->nullable();
			$table->string('url_slug')->nullable();
			$table->string('mausoleum')->nullable();
			$table->string('diksha_detail')->nullable();
			$table->string('current_conflict')->nullable();
			$table->string('serial_number')->nullable();			
			$table->string('description')->nullable();			
			$table->string('vrat_guru')->nullable();
			$table->string('brahmacharya_vrat')->nullable();
			$table->string('mother_tongue')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanghast_aaryikas');
    }
};
