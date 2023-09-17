<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcela extends Model
{
    use HasFactory;

    protected $fillable = [
        'valor',
        'data_vencimento',
        'data_pagamento',
        'origem',
        'origem_id',
        'ordem'
    ];
}
