<?php

namespace Sip\Presenters;

use Sip\Transformers\ModalidadeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ModalidadePresenter
 *
 * @package namespace Sip\Presenters;
 */
class ModalidadePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ModalidadeTransformer();
    }
}
