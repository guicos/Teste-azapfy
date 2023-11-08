<?php

namespace App\Services;

use App\Repositories\NotaRepository;

class TotalValueNotaOpen
{   
    protected $notaRepository;

    public function __construct(NotaRepository $notaRepository)
    {
        $this->notaRepository = $notaRepository;
    }

    public function get()
    {   
        $notaDataRepository = $this->notaRepository->findTotalValueOpen();
        return $notaDataRepository;
    }
}