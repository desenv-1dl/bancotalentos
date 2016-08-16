<?php

namespace Sip\Providers;

use Illuminate\Support\ServiceProvider;

class SipRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Sip\Repositories\AtividadeRepository::class,
            \Sip\Repositories\AtividadeRepositoryEloquent::class
        );
        $this->app->bind(
            \Sip\Repositories\ModalidadeRepository::class,
            \Sip\Repositories\ModalidadeRepositoryEloquent::class
        );
        $this->app->bind(
            \Sip\Repositories\InstituicaoRepository::class,
            \Sip\Repositories\InstituicaoRepositoryEloquent::class
        );
        $this->app->bind(
            \Sip\Repositories\CondecoracaoRepository::class,
            \Sip\Repositories\CondecoracaoRepositoryEloquent::class
        );
        $this->app->bind(
            \Sip\Repositories\GeneroRepository::class,
            \Sip\Repositories\GeneroRepositoryEloquent::class
        );
     
        $this->app->bind(
                \Sip\Repositories\MunicipioRepository::class,
                \Sip\Repositories\MunicipioRepositoryEloquent::class
        );
        
        $this->app->bind(
                \Sip\Repositories\BairroRepository::class,
                \Sip\Repositories\BairroRepositoryEloquent::class
        );
     
        $this->app->bind(
                \Sip\Repositories\PessoaRepository::class,
                \Sip\Repositories\PessoaRepositoryEloquent::class
        );
     
        $this->app->bind(
                \Sip\Repositories\UnidadeFederacaoRepository::class,
                \Sip\Repositories\UnidadeFederacaoRepositoryEloquent::class
        );
        $this->app->bind(
                \Sip\Repositories\FormacaoRepository::class,
                \Sip\Repositories\FormacaoRepositoryEloquent::class
        );
        $this->app->bind(
                \Sip\Repositories\PaisRepository::class,
                \Sip\Repositories\PaisRepositoryEloquent::class
        );
        $this->app->bind(
        \Sip\Repositories\NivelFuncionalRepository::class,
                \Sip\Repositories\NivelFuncionalRepositoryEloquent::class
        );
        $this->app->bind(
        \Sip\Repositories\ContatoRepository::class,
                \Sip\Repositories\ContatoRepositoryEloquent::class
        );
        $this->app->bind(
        \Sip\Repositories\OrganizacaoRepository::class,
                \Sip\Repositories\OrganizacaoRepositoryEloquent::class
        );
        $this->app->bind(
        \Sip\Repositories\PessoaContatoRepository::class,
                \Sip\Repositories\PessoaContatoRepositoryEloquent::class
        );
        $this->app->bind(
        \Sip\Repositories\PessoaAtividadeRepository::class,
                \Sip\Repositories\PessoaAtividadeRepositoryEloquent::class
        );
        $this->app->bind(
        \Sip\Repositories\PessoaCondecoracaoRepository::class,
                \Sip\Repositories\PessoaCondecoracaoRepositoryEloquent::class
        );
        $this->app->bind(
        \Sip\Repositories\ExperienciaProfissionalRepository::class,
        \Sip\Repositories\ExperienciaProfissionalRepositoryEloquent::class
        );
        $this->app->bind(
        \Sip\Repositories\PessoaExperienciaProfissionalRepository::class,
        \Sip\Repositories\PessoaExperienciaProfissionalRepositoryEloquent::class
        );
        
        $this->app->bind(
        \Sip\Repositories\TafRepository::class,
        \Sip\Repositories\TafRepositoryEloquent::class
        );
    }
}
