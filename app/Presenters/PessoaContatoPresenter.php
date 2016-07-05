<?php

namespace Sip\Presenters;

use Sip\Transformers\PessoaContatoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PessoaContatoPresenter
 *
 * @package namespace Sip\Presenters;
 */
class PessoaContatoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PessoaContatoTransformer();
    }
}
