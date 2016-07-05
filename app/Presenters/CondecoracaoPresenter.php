<?php

namespace Sip\Presenters;

use Sip\Transformers\CondecoracaoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CondecoracaoPresenter
 *
 * @package namespace Sip\Presenters;
 */
class CondecoracaoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CondecoracaoTransformer();
    }
}
