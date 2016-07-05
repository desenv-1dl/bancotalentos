<?php

namespace Sip\Presenters;

use Sip\Transformers\MunicipioTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MunicipioPresenter
 *
 * @package namespace Sip\Presenters;
 */
class MunicipioPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MunicipioTransformer();
    }
}
