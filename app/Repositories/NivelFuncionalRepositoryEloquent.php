<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\NivelFuncionalRepository;
use Sip\Entities\NivelFuncional;
use Sip\Presenters\NivelFuncionalPresenter;

/**
 * Class NivelFuncionalRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class NivelFuncionalRepositoryEloquent extends BaseRepository implements NivelFuncionalRepository
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
        return NivelFuncional::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return NivelFuncionalPresenter::class;
    }
}
