<?php

namespace Sip\Presenters;

use Sip\Transformers\TafTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TafPresenter
 *
 * @package namespace Sip\Presenters;
 */
class TafPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TafTransformer();
    }
}
