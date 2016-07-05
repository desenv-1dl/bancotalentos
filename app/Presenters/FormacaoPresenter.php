<?php

namespace Sip\Presenters;

use Sip\Transformers\FormacaoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class FormacaoPresenter
 *
 * @package namespace Sip\Presenters;
 */
class FormacaoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new FormacaoTransformer();
    }
}
