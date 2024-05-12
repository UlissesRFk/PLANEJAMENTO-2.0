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
        Schema::create('pessoa_professors', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_pessoa');
        $table->unsignedBigInteger('id_materia');
        $table->timestamps();

        // Definindo as chaves estrangeiras 
        $table->foreign('id_pessoa')->references('id')->on('pessoas');
        $table->foreign('id_materia')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_professors');
    }
};
