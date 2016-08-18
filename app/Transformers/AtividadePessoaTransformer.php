<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Atividade;

/**
 * Class AtividadeTransformer
 * @package namespace Sip\Transformers;
 */
class AtividadePessoaTransformer extends TransformerAbstract
{

    /**
     * Transform the \Atividade entity
     * @param \Atividade $model
     *
     * @return array
     */
    public function transform(Atividade $model)
    {
        return [
                'id'                => (int) $model->id,
                'codigo'            => $model->codigo,
                'nome'              => $model->nome,
                'idioma'            => $model->idioma
                
              ];

    }
}
