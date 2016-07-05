<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\PaisRepository;
use Sip\Entities\Pais;
use Sip\Presenters\PaisPresenter;

/**
 * Class PaisRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class PaisRepositoryEloquent extends BaseRepository implements PaisRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    protected $fieldSearchable = [
        'id',
        'nome',
        'sigla'
    ];
    public function model()
    {
        return Pais::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return PaisPresenter::class;
    }
    
}
