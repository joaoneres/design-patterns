<?php

namespace App\Services\Integrations\CepConsulting\Interfaces;

interface CepConsultInterface
{
    public function consult(String $cep) : Array;
}
