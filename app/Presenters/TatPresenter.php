<?php

namespace Sip\Presenters;

use Sip\Transformers\TatTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TatPresenter
 *
 * @package namespace Sip\Presenters;
 */
class TatPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TatTransformer();
    }
}
