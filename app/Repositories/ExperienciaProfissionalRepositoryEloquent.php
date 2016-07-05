<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\ExperienciaProfissionalRepository;
use Sip\Entities\ExperienciaProfissional;
use Sip\Presenters\ExperienciaProfissionalPresenter;

/**
 * Class ExperienciaProfissionalRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class ExperienciaProfissionalRepositoryEloquent extends BaseRepository implements ExperienciaProfissionalRepository
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
        return ExperienciaProfissional::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public  function presenter() {
        return ExperienciaProfissionalPresenter::class;
    }
}
