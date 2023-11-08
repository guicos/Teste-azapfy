<?php

namespace App\Services;

use App\Repositories\NotaRepository;

class GroupTotalService
{   
    protected $notaRepository;

    public function __construct(NotaRepository $notaRepository)
    {
        $this->notaRepository = $notaRepository;
    }

    public function get()
    {   
        $notaDataRepository = $this->notaRepository->find();
        $notasAgrupadas = [];
        foreach ($notaDataRepository as $nota) {
            $nomeRemete = $nota['nome_remete'];
        
            if (isset($notasAgrupadas[$nomeRemete])) {
                $notasAgrupadas[$nomeRemete][] = $nota;
            } else {
                $notasAgrupadas[$nomeRemete] = [$nota];
            }
        }
        return $notasAgrupadas;
    }
}