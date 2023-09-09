<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone')->nullable();
            $table->string('cpf')->nullable();
            $table->string('endereco')->nullable();
            $table->unsignedBigInteger('cidade_id')->nullable();
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->string('cep')->nullable();
            $table->string('cargo')->nullable();
            $table->decimal('salario', 10, 2)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->date('data_admissao')->nullable();
            $table->date('data_demissao')->nullable();
            $table->string('status')->nullable();
            $table->text('observacoes')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            // $table->foreign('cidade_id')->references('id')->on('cidades')->nullable();
            // $table->foreign('estado_id')->references('id')->on('estados')->nullable();
            // $table->foreign('user_id')->references('id')->on('users')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};