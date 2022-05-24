<?php

namespace App\Services\Integrations\CepConsulting\Factories;

use App\Services\Integrations\CepConsulting\Interfaces\CepConsultInterface;

abstract class CepConsultFactory
{
    abstract public function createCepConsult(): CepConsultInterface;
}
