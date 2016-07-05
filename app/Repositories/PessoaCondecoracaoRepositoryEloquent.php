<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\PessoaCondecoracaoRepository;
use Sip\Entities\PessoaCondecoracao;
use Sip\Presenters\PessoaCondecoracaoPresenter;

/**
 * Class PessoaCondecoracaoRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class PessoaCondecoracaoRepositoryEloquent extends BaseRepository implements PessoaCondecoracaoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    protected $fieldSearchable  = [
        'id',
        'pessoa_id',
        'condecoracao_id',
        'data_indicacao',
        'data_condecoracao'
    ];
    public function model()
    {
        return PessoaCondecoracao::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter()
    {
        return PessoaCondecoracaoPresenter::class;
    }
}
