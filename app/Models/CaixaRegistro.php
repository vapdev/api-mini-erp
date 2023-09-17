<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaixaRegistro extends Model
{
    use HasFactory;

    protected $table = 'caixa_registros';

    protected $fillable = [
        'tipo',
        'descricao',
        'valor',
        'caixa_id',
        'user_id',
        'a_prazo',
        'forma_pagamento_id',
    ];
}
