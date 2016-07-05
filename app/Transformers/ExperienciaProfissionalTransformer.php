<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\ExperienciaProfissional;

/**
 * Class ExperienciaProfissionalTransformer
 * @package namespace Sip\Transformers;
 */
class ExperienciaProfissionalTransformer extends TransformerAbstract
{

    /**
     * Transform the \ExperienciaProfissional entity
     * @param \ExperienciaProfissional $model
     *
     * @return array
     */
    public function transform(ExperienciaProfissional $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          => $model->nome,
            'nome_abrev'    => $model->nome_abrev
        ];
    }
}
