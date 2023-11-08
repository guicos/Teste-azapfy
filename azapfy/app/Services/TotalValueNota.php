<?php

namespace App\Services;

use App\Repositories\NotaRepository;

class TotalValueNota
{   
    protected $notaRepository;

    public function __construct(NotaRepository $notaRepository)
    {
        $this->notaRepository = $notaRepository;
    }

    public function get()
    {   
        $notaDataRepository = $this->notaRepository->findTotalValueNota();
        return $notaDataRepository;
    }
}