<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaixaFluxo extends Model
{
    use HasFactory;

    protected $table = 'caixa_fluxos';

    protected $fillable = [
        'caixa_id',
        'saldo_inicial',
        'saldo_final',
    ];
}
