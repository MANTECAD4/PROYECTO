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
        Schema::create('producto_user', function (Blueprint $table) {
            $table->foreignId('producto_id')->constrained('productos');
            $table->timestamp('fecha')->useCurrent();
            $table->foreignId('user_id')->contsrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_user');
    }
};
