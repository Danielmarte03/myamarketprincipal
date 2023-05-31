<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();

            $table->integer('empresa')->default(1);
            $table->string('codigo', 50)->unique();
            $table->string('nombre', 150);
            $table->decimal('precio', 14,2);
            $table->text('descripcion');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
