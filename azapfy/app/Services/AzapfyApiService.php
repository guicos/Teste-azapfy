<?php

namespace App\Services;

use App\Adapters\AzapfyApiAdapter;
use App\Models\Nota;

class AzapfyApiService
{   
    protected $azapfyApiAdapter;

    public function __construct(AzapfyApiAdapter $azapfyApiAdapter)
    {
        $this->azapfyApiAdapter = $azapfyApiAdapter;
    }

    public function getNotas()
    {
        $notasApi = $this->azapfyApiAdapter->fetchNotas();

        foreach($notasApi as $dataApi){
            $exists = Nota::where('chave', $dataApi['chave'])->first();
            if($exists){
                $exists->update([
                    'status' => $dataApi['status']
                ]);
            }else{
                $nota = new Nota();
        
                $nota->chave = $dataApi['chave'];
                $nota->numero = $dataApi['numero'];
                $nota->dest_nome = $dataApi['dest']['nome'];
                $nota->dest_cod = $dataApi['dest']['cod'];
                $nota->cnpj_remete = $dataApi['cnpj_remete'];
                $nota->nome_remete = $dataApi['nome_remete'];
                $nota->nome_transp = $dataApi['nome_transp'];
                $nota->cnpj_transp = $dataApi['cnpj_transp'];
                $nota->status = $dataApi['status'];
                $nota->valor = $dataApi['valor'];
                $nota->volumes = $dataApi['volumes'];
                $nota->dt_emis = \Carbon\Carbon::createFromFormat('d/m/Y H:i:s', $dataApi['dt_emis']);
                
                // Verifique se 'dt_entrega' está definido para evitar erros
                if (isset($dataApi['dt_entrega'])) {
                    $nota->dt_entrega = \Carbon\Carbon::createFromFormat('d/m/Y H:i:s', $dataApi['dt_entrega']);
                }
                
                $nota->save();
            }
        }
    }
}