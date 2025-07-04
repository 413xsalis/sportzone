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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('dia');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('grupo_id');
            $table->timestamps();

            // Relaciones foráneas
            $table->foreign('instructor_id')->references('id')->on('instructores')->onDelete('cascade');
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
