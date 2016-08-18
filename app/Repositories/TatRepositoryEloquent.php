<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\TatRepository;
use Sip\Entities\Tat;

/**
 * Class TatRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class TatRepositoryEloquent extends BaseRepository implements TatRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Tat::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
