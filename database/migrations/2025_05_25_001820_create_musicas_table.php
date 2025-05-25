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
    Schema::create('musicas', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->string('artista');
        $table->string('genero');
        $table->string('album');
        $table->integer('duracion'); // duración en segundos
        $table->year('anio');
        $table->string('imagen'); // ruta o URL de la imagen
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicas');
    }
};
