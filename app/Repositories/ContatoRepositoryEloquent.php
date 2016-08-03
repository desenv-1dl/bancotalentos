<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\ContatoRepository;
use Sip\Entities\Contato;
use Sip\Presenters\ContatoPresenter;

/**
 * Class ContatoRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class ContatoRepositoryEloquent extends BaseRepository implements ContatoRepository
{
    protected $fieldSearchable  = [
        'id',
        'nome'
    ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contato::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    public function presenter() {
        ContatoPresenter::class;
    }
}
