<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\PessoaRepository;
use Sip\Entities\Pessoa;
use Sip\Presenters\PessoaPresenter;

/**
 * Class PessoaRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class PessoaRepositoryEloquent extends BaseRepository implements PessoaRepository
{
    protected $fieldSearchable  = [
        'id',
        'nome',
        'nome_guerra',
        'cpf',
        'nivel_funcional_id',
        'organizacao_id',
        'genero_id',
        'formacao_id',
        'data_nascimento',
        'endereco',
        'numero',
        'complemento',
        'cep',
        'bairro_id',
        'municipio_id',
        'observacao',
        'ativo'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Pessoa::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        return $this->pushCriteria(app(RequestCriteria::class));
    }
    
    public function presenter()
    {
        return PessoaPresenter::class;
    }
}
