<?php

namespace App\Http\Controllers;

use App\Services\Integrations\CepConsulting\Factories\CepConsultFactory;

class TestController extends Controller
{
    protected CepConsultFactory $cep_consult_factory;
    protected $cep_consult;

    public function __construct(CepConsultFactory $cep_consult_factory)
    {
        $this->cep_consult_factory = $cep_consult_factory;
        $this->cep_consult = $cep_consult_factory->createCepConsult();
    }

    public function test()
    {
        dd($this->cep_consult->consult('65910020'));
    }
}
