<?php

namespace Sip\Presenters;

use Sip\Transformers\GeneroTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class GeneroPresenter
 *
 * @package namespace Sip\Presenters;
 */
class GeneroPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new GeneroTransformer();
    }
}
