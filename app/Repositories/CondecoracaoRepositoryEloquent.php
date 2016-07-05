<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\CondecoracaoRepository;
use Sip\Entities\Condecoracao;
use Sip\Presenters\CondecoracaoPresenter;

/**
 * Class CondecoracaoRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class CondecoracaoRepositoryEloquent extends BaseRepository implements CondecoracaoRepository
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
        return Condecoracao::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return CondecoracaoPresenter::class;
    }
}
