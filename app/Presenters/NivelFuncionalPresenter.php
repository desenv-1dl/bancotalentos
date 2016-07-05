<?php

namespace Sip\Presenters;

use Sip\Transformers\NivelFuncionalTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class NivelFuncionalPresenter
 *
 * @package namespace Sip\Presenters;
 */
class NivelFuncionalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new NivelFuncionalTransformer();
    }
}
