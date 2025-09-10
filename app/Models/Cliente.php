<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf_cnpj',
        'telefone',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'ponto_referencia',
    ];
}
