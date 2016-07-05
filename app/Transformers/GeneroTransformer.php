<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Genero;

/**
 * Class GeneroTransformer
 * @package namespace Sip\Transformers;
 */
class GeneroTransformer extends TransformerAbstract
{

    /**
     * Transform the \Genero entity
     * @param \Genero $model
     *
     * @return array
     */
    public function transform(Genero $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          => $model->nome,
            'nome_abrev'    => $model->nome_abrev
        ];
    }
}
