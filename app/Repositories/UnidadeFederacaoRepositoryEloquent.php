<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\UnidadeFederacaoRepository;
use Sip\Entities\UnidadeFederacao;
use Sip\Presenters\UnidadeFederacaoPresenter;

/**
 * Class UnidadeFederacaoRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class UnidadeFederacaoRepositoryEloquent extends BaseRepository implements UnidadeFederacaoRepository
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
        'pais_id'
    ];
    public function model()
    {
        return UnidadeFederacao::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return UnidadeFederacaoPresenter::class;
    }
}
