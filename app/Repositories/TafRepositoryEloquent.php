<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\TafRepository;
use Sip\Entities\Taf;
use Sip\Presenters\TafPresenter;

/**
 * Class TafRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class TafRepositoryEloquent extends BaseRepository implements TafRepository
{
    protected $fieldSearchable  = [
        'id',
        'pessoa_id',
        'nr_taf',
        'ano',
        'chamada',
        'data_realizacao',
        'mencao',
        'suficiencia',
        'situacao',
        'documento'
    ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Taf::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return TafPresenter::class;
    }
}
