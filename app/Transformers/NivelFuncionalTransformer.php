<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\NivelFuncional;

/**
 * Class NivelFuncionalTransformer
 * @package namespace Sip\Transformers;
 */
class NivelFuncionalTransformer extends TransformerAbstract
{

    /**
     * Transform the \NivelFuncional entity
     * @param \NivelFuncional $model
     *
     * @return array
     */
    public function transform(NivelFuncional $model)
    {
        return [
                'id'                => (int) $model->id,
                'nome'              => $model->nome,
                'nome_abrev'        => $model->nome_abrev
              ];

    }
}
