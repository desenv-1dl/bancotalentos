<?php

namespace Sip\Presenters;

use Sip\Transformers\PessoaExperienciaProfissionalTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PessoaExperienciaProfissionalPresenter
 *
 * @package namespace Sip\Presenters;
 */
class PessoaExperienciaProfissionalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PessoaExperienciaProfissionalTransformer();
    }
}
