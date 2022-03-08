<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'quadra',        
        'numero',
        'complemento',        
        'tipo',        
        'nome',
        'cpf',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'contato',
        'situacao'
    ];
}
