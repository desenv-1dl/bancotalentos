<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Formacao;

/**
 * Class FormacaoTransformer
 * @package namespace Sip\Transformers;
 */
class FormacaoTransformer extends TransformerAbstract
{

    /**
     * Transform the \Formacao entity
     * @param \Formacao $model
     *
     * @return array
     */
    public function transform(Formacao $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          => $model->nome,
            'nome_abrev'    => $model->nome_abrev

        ];
    }
}
