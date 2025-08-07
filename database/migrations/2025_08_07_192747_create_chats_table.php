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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario_a')->constrained('usuarios');
            $table->foreignId('id_producto')->constrained('productos');
            $table->foreignId('id_estado')->constrained('estados');
            $table->boolean('visto_a')->default(0);
            $table->boolean('visto_b')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
