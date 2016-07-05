<?php

namespace Sip\Presenters;

use Sip\Transformers\ValidadoComoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ValidadoComoPresenter
 *
 * @package namespace Sip\Presenters;
 */
class ValidadoComoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ValidadoComoTransformer();
    }
}
