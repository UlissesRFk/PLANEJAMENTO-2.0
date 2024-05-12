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
        Schema::create('professores_turma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_professor');
            $table->unsignedBigInteger('id_turma');
            $table->timestamps();

            $table->foreign('id_professor')->references('id')->on('pessoa_professors');
            $table->foreign('id_turma')->references('id')->on('turmas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professor_turmas');
    }
};
