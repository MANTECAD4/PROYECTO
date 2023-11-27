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
            $table->string('name')->unique();
            $table->text('descripcion');
            $table->decimal('price', 10, 2);
            $table->integer('unidades');
            $table->string('marca');
            $table->string('ruta_imagen');
            $table->string('nombre_imagen');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->timestamps();
            $table->softDeletes();
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
