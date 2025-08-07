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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_correo')->constrained('correos');
            $table->string('password', 127);
            $table->string('nombre', 32);
            $table->unsignedBigInteger('avatar')->nullable(); // No es una relación clara
            $table->string('descripcion', 512)->nullable();
            $table->string('link', 128)->nullable();
            $table->boolean('notifica_correo')->default(0);
            $table->boolean('notifica_push')->default(0);
            $table->boolean('notifica_sms')->default(0);
            $table->date('fecha_registro');
            $table->date('fecha_actualiza')->nullable();
            $table->timestamp('fecha_reciente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
