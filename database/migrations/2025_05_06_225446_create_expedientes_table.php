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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->char('numero_expediente', length: 5)->unique();
            $table->string('asunto');
            $table->timestamp('fecha_inicio');
            $table->foreignId('id_estatus')->constrained(
                table: 'estatus',
                column: 'id',
            )->cascadeOnDelete();
            $table->foreignId('id_usuario_regstra')->constrained(
                table: 'users',
                column: 'id',
            )->cascadeOnDelete();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
    }
};
