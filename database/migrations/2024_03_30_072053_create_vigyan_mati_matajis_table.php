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
        Schema::create('vigyan_mati_matajis', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('old_name');
            $table->string('father_name');			
			$table->string('mother_name');
            $table->string('image')->nullable();
            $table->text('brother_sister')->nullable();
            $table->text('husband_name')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('birth_place')->nullable();
            $table->text('secular_education')->nullable();
			$table->text('marriage')->nullable();
            $table->text('homelessness')->nullable();
            $table->text('holding_the_statue')->nullable();
            $table->text('aryika_diksha')->nullable();
			$table->text('initiation_guru')->nullable();
			$table->text('interests')->nullable();
			$table->text('specialty')->nullable();
			$table->text('initiated_disciples')->nullable();
			$table->string('mausoleum')->nullable();
			$table->text('diksha_detail')->nullable();
			$table->text('current_conflict')->nullable();
			$table->text('aajeevan_tyaag_niyam')->nullable();
			$table->text('description')->nullable();	
			$table->text('saanidhy_and_nirdeshan')->nullable();	
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vigyan_mati_matajis');
    }
};
