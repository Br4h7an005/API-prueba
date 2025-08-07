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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 64);
            $table->boolean('is_imagen')->default(0);
            $table->foreignId('id_subcategoria')->constrained('subcategorias');
            $table->foreignId('id_uso')->constrained('usos');
            $table->foreignId('id_propietario')->constrained('usuarios');
            $table->foreignId('id_estado')->constrained('estados');
            $table->string('descripcion', 512)->nullable();
            $table->float('precio');
            $table->unsignedSmallInteger('disponibles');
            $table->date('fecha_registro');
            $table->date('fecha_actualiza')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
