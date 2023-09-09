<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cpf',
        'endereco',
        'cidade_id',
        'estado_id',
        'cep',
        'cargo',
        'salario',
        'data_nascimento',
        'data_admissao',
        'data_demissao',
        'status',
        'observacoes',
        'user_id',
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'funcionario_id');
    }
}