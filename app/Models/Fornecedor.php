<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'email', 'cnpj', 'telefone', 'endereco', 'cidade_id', 'estado_id', 'cep'];
}
