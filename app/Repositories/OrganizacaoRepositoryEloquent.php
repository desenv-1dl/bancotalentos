<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\OrganizacaoRepository;
use Sip\Entities\Organizacao;
use Sip\Presenters\OrganizacaoPresenter;

/**
 * Class OrganizacaoRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class OrganizacaoRepositoryEloquent extends BaseRepository implements OrganizacaoRepository
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
        return Organizacao::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return OrganizacaoPresenter::class;
    }
}
