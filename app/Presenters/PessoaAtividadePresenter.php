<?php

namespace Sip\Presenters;

use Sip\Transformers\PessoaAtividadeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PessoaAtividadePresenter
 *
 * @package namespace Sip\Presenters;
 */
class PessoaAtividadePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PessoaAtividadeTransformer();
    }
}
