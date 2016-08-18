<?php

namespace Sip\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sip\Repositories\PessoaExperienciaProfissionalRepository;
use Sip\Entities\PessoaExperienciaProfissional;
use Sip\Presenters\PessoaExperienciaProfissionalPresenter;

/**
 * Class PessoaExperienciaProfissionalRepositoryEloquent
 * @package namespace Sip\Repositories;
 */
class PessoaExperienciaProfissionalRepositoryEloquent extends BaseRepository implements PessoaExperienciaProfissionalRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    protected $fieldSearchable  = [
        'id',
        'pessoa_id',
        'experiencia_profissional_id',
        'data_inicio',
        'data_fim',
        'observacao'
    ];
    public function model()
    {
        return PessoaExperienciaProfissional::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter() {
        return PessoaExperienciaProfissionalPresenter::class;
    }
}
