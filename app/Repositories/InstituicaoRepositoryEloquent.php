<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\InstituicaoRepository;
use Sip\Entities\Instituicao;
use Sip\Presenters\InstituicaoPresenter;

/**
 * Class InstituicaoRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class InstituicaoRepositoryEloquent extends BaseRepository implements InstituicaoRepository
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
        return Instituicao::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return InstituicaoPresenter::class;
    }
}
