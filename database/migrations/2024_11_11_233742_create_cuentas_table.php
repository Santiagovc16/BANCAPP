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
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cuenta'); // Añadir columna 'numero_cuenta'
            $table->decimal('saldo', 10, 2); // Añadir columna 'saldo'
            $table->unsignedBigInteger('user_id'); // Añadir columna 'user_id'
            $table->timestamps();

            // Añadir clave foránea para 'user_id'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas');
    }
};
