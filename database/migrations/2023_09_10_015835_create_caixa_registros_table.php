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
        Schema::create('caixa_registros', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 1);
            $table->string('descricao')->nullable();
            $table->decimal('valor', 10, 2);
            $table->unsignedBigInteger('caixa_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('a_prazo')->default(false);
            $table->unsignedBigInteger('forma_pagamento_id')->nullable();
            $table->timestamps();

            $table->foreign('caixa_id')->references('id')->on('caixas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caixa_registros');
    }
};
