<?php

namespace Sip\Presenters;

use Sip\Transformers\UnidadeFederacaoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UnidadeFederacaoPresenter
 *
 * @package namespace Sip\Presenters;
 */
class UnidadeFederacaoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UnidadeFederacaoTransformer();
    }
}
