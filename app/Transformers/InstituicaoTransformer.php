<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Instituicao;

/**
 * Class InstituicaoTransformer
 * @package namespace Sip\Transformers;
 */
class InstituicaoTransformer extends TransformerAbstract
{

    /**
     * Transform the \Instituicao entity
     * @param \Instituicao $model
     *
     * @return array
     */
    public function transform(Instituicao $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          => $model->nome,
            'nome_abrev'    => $model->nome_abrev
        ];
    }
}
