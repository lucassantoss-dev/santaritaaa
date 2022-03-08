<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'quadra',        
        'numero',
        'complemento',        
        'titular',
        'responsavel',     
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'contato',
        'valor',
        'vencimento',
        'secretario',
        'socio_id'
    ];

    public function socio()
    {
        $this->socio(Socio::class);
    }
}
