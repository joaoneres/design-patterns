<?php

namespace App\Services\Integrations\CepConsulting\Factories;

use App\Services\Integrations\CepConsulting\Interfaces\CepConsultInterface;
use App\Services\Integrations\CepConsulting\Services\ApiCepConsultService;

class ApiCepConsultFactory extends CepConsultFactory
{
    public function createCepConsult(): CepConsultInterface
    {
        return new ApiCepConsultService();
    }
}
