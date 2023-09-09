<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('cnpj')->unique()->nullable();
            $table->string('telefone')->nullable();
            $table->string('endereco')->nullable();
            $table->unsignedBigInteger('cidade_id')->nullable();
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->string('cep')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
}