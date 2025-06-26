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
        Schema::create('asistencia', function (Blueprint $table) {
            $table->date('fecha');
            $table->unsignedBigInteger('documento_estudiante');
            $table->unsignedBigInteger('id_grupo');
            $table->string('estado');

            $table->primary(['fecha', 'documento_estudiante']);

            $table->foreign('documento_estudiante')->references('documento')->on('estudiantes')->onDelete('cascade');
            $table->foreign('id_grupo')->references('id')->on('grupos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia');
    }
};
