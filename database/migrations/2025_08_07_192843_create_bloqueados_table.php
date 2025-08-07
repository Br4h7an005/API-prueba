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
        Schema::create('bloqueados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bloqueador')->constrained('usuarios');
            $table->foreignId('id_bloqueado')->constrained('usuarios');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloqueados');
    }
};
