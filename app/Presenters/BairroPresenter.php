<?php

namespace Sip\Presenters;

use Sip\Transformers\BairroTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class BairroPresenter
 *
 * @package namespace Sip\Presenters;
 */
class BairroPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new BairroTransformer();
    }
}
