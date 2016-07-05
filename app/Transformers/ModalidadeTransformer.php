<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Modalidade;

/**
 * Class ModalidadeTransformer
 * @package namespace Sip\Transformers;
 */
class ModalidadeTransformer extends TransformerAbstract
{

    /**
     * Transform the \Modalidade entity
     * @param \Modalidade $model
     *
     * @return array
     */
    public function transform(Modalidade $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          => $model->nome
        ];
    }
}
