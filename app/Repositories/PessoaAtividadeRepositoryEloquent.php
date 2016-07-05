<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\PessoaAtividadeRepository;
use Sip\Entities\PessoaAtividade;
use \Sip\Presenters\PessoaAtividadePresenter;

/**
 * Class PessoaAtividadeRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class PessoaAtividadeRepositoryEloquent extends BaseRepository implements PessoaAtividadeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    protected $fieldSearchable  = [
        'id',
        'pessoa_id',
        'modalidade_id',
        'atividade_id',
        'instituicao_id',
        'custo_atividade',
        'bi',
        'municipio_id',
        'ano',
        'carga_horaria'
    ];
    
    public function model()
    {
        return PessoaAtividade::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return PessoaAtividadePresenter::class;
    }
}
