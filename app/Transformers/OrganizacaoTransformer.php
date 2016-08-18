<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Organizacao;

/**
 * Class OrganizacaoTransformer
 * @package namespace Sip\Transformers;
 */
class OrganizacaoTransformer extends TransformerAbstract
{

    /**
     * Transform the \Organizacao entity
     * @param \Organizacao $model
     *
     * @return array
     */
    public function transform(Organizacao $model)
    {
        return [
                'id'                => (int) $model->id,
                'nome'              => $model->nome,
                'nome_abrev'        => $model->nome_abrev
              ];

    }
}
