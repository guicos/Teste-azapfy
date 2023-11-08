<?php

namespace App\Repositories;

use App\Models\Nota;
use Illuminate\Support\Facades\DB;

class NotaRepository
{
    public function find()
    {
        return Nota::all();
    }

    public function findTotalValueNota()
    {
        return Nota::select('nome_remete')
        ->selectRaw('SUM(valor) as valor_total')
        ->groupBy('nome_remete')
        ->get();
    }

    public function findTotalValueProven()
    {
        return Nota::select('nome_remete', DB::raw('SUM(valor) as total_valor_comprovado'))
            ->where('status', 'COMPROVADO')
            ->groupBy('nome_remete')
            ->get();
    }

    
    public function findTotalValueOpen()
    {
        return Nota::select('nome_remete', DB::raw('SUM(valor) as total_valor_em_aberto'))
            ->where('status', '<>', 'COMPROVADO')
            ->groupBy('nome_remete')
            ->get();
    }

    public function findTotalValueLost()
    {
        return Nota::select('nome_remete', DB::raw('SUM(valor) as valor_atrasado'))
        ->where('status', 'COMPROVADO')
        ->whereRaw("DATE_PART('day', dt_entrega - dt_emis) > 2")
        ->groupBy('nome_remete')
        ->get();
    }
}