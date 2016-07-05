<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\PessoaContatoRepository;
use Sip\Entities\PessoaContato;
use Sip\Presenters\PessoaContatoPresenter;

/**
 * Class PessoaContatoRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class PessoaContatoRepositoryEloquent extends BaseRepository implements PessoaContatoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    protected $fieldSearchable  = [
        'id',
        'pessoa_id',
        'contato_id',
        'valor'
    ];
    public function model()
    {
        return PessoaContato::class;
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
        return PessoaContatoPresenter::class;
    }
}
