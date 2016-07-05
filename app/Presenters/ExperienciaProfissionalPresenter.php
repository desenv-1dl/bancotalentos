<?php

namespace Sip\Presenters;

use Sip\Transformers\ExperienciaProfissionalTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ExperienciaProfissionalPresenter
 *
 * @package namespace Sip\Presenters;
 */
class ExperienciaProfissionalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ExperienciaProfissionalTransformer();
    }
}
