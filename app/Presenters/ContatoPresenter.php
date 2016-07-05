<?php

namespace Sip\Presenters;

use Sip\Transformers\ContatoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ContatoPresenter
 *
 * @package namespace Sip\Presenters;
 */
class ContatoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ContatoTransformer();
    }
}
