<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\BairroRepository;
use Sip\Entities\Bairro;
use Sip\Presenters\BairroPresenter;

/**
 * Class BairroRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class BairroRepositoryEloquent extends BaseRepository implements BairroRepository
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
        'municipio_id'
    ];
    public function model()
    {
        return Bairro::class;
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
        return BairroPresenter::class;
    }
}
