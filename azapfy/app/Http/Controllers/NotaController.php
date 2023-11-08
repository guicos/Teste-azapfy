<?php

namespace App\Http\Controllers;

use App\Services\GroupTotalService;
use App\Services\TotalValueNota;
use App\Services\TotalValueNotaProven;
use App\Services\TotalValueNotaOpen;
use App\Services\TotalValueNotaLost;

class NotaController extends Controller
{
    public function groupTotal(GroupTotalService $groupTotalService )
    {
        return $groupTotalService -> get();
    }

    public function totalValueNota(TotalValueNota $totalValueNota )
    {
        return $totalValueNota -> get();
    }

    public function totalValueNotaProven(TotalValueNotaProven $totalValueNotaProven )
    {
        return $totalValueNotaProven -> get();
    }

    public function totalValueNotaOpen(TotalValueNotaOpen $totalValueNotaOpen )
    {
        return $totalValueNotaOpen -> get();
    }

    public function totalValueNotaLost(TotalValueNotaLost $totalValueNotaLost )
    {
        return $totalValueNotaLost -> get();
    }
}
