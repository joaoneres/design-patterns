<?php

namespace App\Services\Integrations\CepConsulting\Services;

use App\Services\Integrations\CepConsulting\Interfaces\CepConsultInterface;
use Illuminate\Support\Facades\Http;

class ApiCepConsultService implements CepConsultInterface
{
    private String $base_url = 'https://ws.apicep.com/cep/';

    public function consult(String $cep) : Array
    {
        $response = Http::get($this->base_url.$cep.'.json');
        return json_decode($response->body(), true);
    }
}
