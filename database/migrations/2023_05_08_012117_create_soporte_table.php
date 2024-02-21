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
        Schema::create('soporte', function (Blueprint $table) {
            $table->id();
            $table->string('fecha')->nullable();
            $table->string('area')->nullable();
            $table->string('responsable')->nullable();
            $table->string('cargo')->nullable();
            $table->boolean('conexion')->nullable();
            $table->boolean('fallo')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('grupo')->nullable();
            $table->string('equipo')->nullable();
            $table->string('anti')->nullable();
            $table->string('ip')->nullable();
            $table->string('mac')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soporte');
    }
};
