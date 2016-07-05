<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Pais;

/**
 * Class PaisTransformer
 * @package namespace Sip\Transformers;
 */
class PaisTransformer extends TransformerAbstract
{

    /**
     * Transform the \Pais entity
     * @param \Pais $model
     *
     * @return array
     */
    public function transform(Pais $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          => $model->nome,
            'sigla'         => $model->sigla
        ];
    }
}
