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
        Schema::create('chequeo_cuadres', function (Blueprint $table) {
            $table->id();

            $table->Integer('codigo_caja');
            $table->Integer('codigo_moneda');
            $table->string('nombre_moneda', 30);
            $table->string('nombre_cajera', 40);
            $table->decimal('total_moneda', 14,2);
            $table->date('fecha_dia');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chequeo_cuadres');
    }
};
