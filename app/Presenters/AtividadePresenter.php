<?php

namespace Sip\Presenters;

use Sip\Transformers\AtividadeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AtividadePresenter
 *
 * @package namespace Sip\Presenters;
 */
class AtividadePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AtividadeTransformer();
    }
}
