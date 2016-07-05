<?php

namespace Sip\Presenters;

use Sip\Transformers\OrganizacaoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class OrganizacaoPresenter
 *
 * @package namespace Sip\Presenters;
 */
class OrganizacaoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new OrganizacaoTransformer();
    }
}
