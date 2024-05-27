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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->notnull();
            $table->string('email')->unique()->notnull();
            $table->string('senha')->notnull();
            $table->enum('tipo',['0','1'])->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('materias_id');
            $table->foreign('materias_id')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};