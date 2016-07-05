<?php

namespace Sip\Presenters;

use Sip\Transformers\InstituicaoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class InstituicaoPresenter
 *
 * @package namespace Sip\Presenters;
 */
class InstituicaoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new InstituicaoTransformer();
    }
}
