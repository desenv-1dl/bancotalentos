<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\GeneroRepository;
use Sip\Entities\Genero;
use Sip\Presenters\GeneroPresenter;

/**
 * Class GeneroRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class GeneroRepositoryEloquent extends BaseRepository implements GeneroRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    protected $fieldSearchable = [
        'id',
        'nome',
        'nome_abrev'
    ];
    public function model()
    {
        return Genero::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return GeneroPresenter::class;
    }
}
