<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Condecoracao;

/**
 * Class CondecoracaoTransformer
 * @package namespace Sip\Transformers;
 */
class CondecoracaoTransformer extends TransformerAbstract
{

    /**
     * Transform the \Condecoracao entity
     * @param \Condecoracao $model
     *
     * @return array
     */
    public function transform(Condecoracao $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          => $model->nome,
            'nome_abrev'    => $model->nome_abrev
        ];
    }
}
