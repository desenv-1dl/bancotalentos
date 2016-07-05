<?php

namespace Sip\Presenters;

use Sip\Transformers\PaisTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PaisPresenter
 *
 * @package namespace Sip\Presenters;
 */
class PaisPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PaisTransformer();
    }
}
