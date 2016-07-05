<?php

namespace Sip\Presenters;

use Sip\Transformers\PessoaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PessoaPresenter
 *
 * @package namespace Sip\Presenters;
 */
class PessoaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PessoaTransformer();
    }
}
