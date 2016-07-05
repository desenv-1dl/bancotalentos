<?php

namespace Sip\Presenters;

use Sip\Transformers\PessoaCondecoracaoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PessoaCondecoracaoPresenter
 *
 * @package namespace Sip\Presenters;
 */
class PessoaCondecoracaoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PessoaCondecoracaoTransformer();
    }
}
