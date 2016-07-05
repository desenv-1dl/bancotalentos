<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\AtividadeRepository;
use Sip\Entities\Atividade;
use Sip\Presenters\AtividadePresenter;

/**
 * Class AtividadeRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class AtividadeRepositoryEloquent extends BaseRepository implements AtividadeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     * 
     */
    protected $fieldSearchable = [
        'id',
        'codigo',
        'nome',
        'idioma'
    ];
    public function model()
    {
        return Atividade::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return AtividadePresenter::class;
    }
}
