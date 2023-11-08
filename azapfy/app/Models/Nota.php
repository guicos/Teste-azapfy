<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'notas';

    protected $fillable = [
        'chave',
        'numero',
        'dest',
        'cnpj_remete',
        'nome_remete',
        'nome_transp',
        'cnpj_transp',
        'status',
        'valor',
        'volumes',
        'dt_emis',
        'dt_entrega',
    ];
}
