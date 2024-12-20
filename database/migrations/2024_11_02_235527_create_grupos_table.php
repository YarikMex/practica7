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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id('idGrupo');
            $table->string('nombreGrupo');
            $table->string('descripcionGrupo');
            $table->integer('maxAlumnos');
            $table->string('idPeriodo');
            $table->foreign('idPeriodo')->references('idPeriodo')->on('periodos');
            $table->string('idMateria')->nullable();
            $table->foreign('idMateria')->references('idMateria')->on('materias');
            $table->string('noTrabajador')->nullable();
            $table->foreign('noTrabajador')->references('noTrabajador')->on('personals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
