<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Contato;

/**
 * Class ContatoTransformer
 * @package namespace Sip\Transformers;
 */
class ContatoTransformer extends TransformerAbstract
{

    /**
     * Transform the \Contato entity
     * @param \Contato $model
     *
     * @return array
     */
    public function transform(Contato $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          => $model->nome
        ];
    }
}
