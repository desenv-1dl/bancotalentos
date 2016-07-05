<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\FormacaoRepository;
use Sip\Entities\Formacao;
use Sip\Presenters\FormacaoPresenter;

/**
 * Class FormacaoRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class FormacaoRepositoryEloquent extends BaseRepository implements FormacaoRepository
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
        return Formacao::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return FormacaoPresenter::class;
    }
}
