<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Integrations\CepConsulting\Factories\ApiCepConsultFactory;
use App\Services\Integrations\CepConsulting\Factories\CepConsultFactory;
use App\Services\Integrations\CepConsulting\Factories\ViaCepConsultFactory;

class IntegrationsServiceProvider extends ServiceProvider
{
    private Array $cep_integrators = [
        ApiCepConsultFactory::class,
        ViaCepConsultFactory::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CepConsultFactory::class, $this->cep_integrators[array_rand($this->cep_integrators)]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
