<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\MunicipioRepository;
use Sip\Entities\Municipio;
use Sip\Presenters\MunicipioPresenter;

/**
 * Class MunicipioRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class MunicipioRepositoryEloquent extends BaseRepository implements MunicipioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    protected $fieldSearchable = [
        'id',
        'nome',
        'sigla',
        'unidade_federacao_id'
    ];
    
    public function model()
    {
        return Municipio::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return MunicipioPresenter::class;
    }
}
