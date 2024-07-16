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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('disease_name')->nullable()->before('description'); //Nuevo campo
            $table->text('description');
            $table->string('chemical_treatment')->nullable(); // Nuevo campo 
            $table->string('treatment_quantity')->nullable(); // Nuevo campo
            $table->text('preventive_measures')->nullable(); // Nuevo campo
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
