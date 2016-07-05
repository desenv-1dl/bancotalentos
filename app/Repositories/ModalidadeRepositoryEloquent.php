<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\ModalidadeRepository;
use Sip\Entities\Modalidade;
use Sip\Presenters\ModalidadePresenter;

/**
 * Class ModalidadeRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class ModalidadeRepositoryEloquent extends BaseRepository implements ModalidadeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Modalidade::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return ModalidadePresenter::class;
    }
}
