<?php

namespace App\Adapters;

use GuzzleHttp\Client;

class AzapfyApiAdapter
{
    protected $httpClient;

    public function __construct()
    {
        $this->httpClient =new Client();
    }

    public function fetchNotas()
    {
        $response = $this->httpClient-> get(env('AZAPFY_API_URL'));

        if($response->getStatusCode() === 200){
            return json_decode($response->getBody(), true);
        }

        return null;
    }
}
