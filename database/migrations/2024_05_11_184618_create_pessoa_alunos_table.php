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
    Schema::create('pessoa_alunos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_pessoa');
        $table->unsignedBigInteger('id_turma');
        $table->timestamps();

        // Definindo as chaves estrangeiras 
        $table->foreign('id_pessoa')->references('id')->on('pessoas');
        $table->foreign('id_turma')->references('id')->on('turmas');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_alunos');
    }
};
