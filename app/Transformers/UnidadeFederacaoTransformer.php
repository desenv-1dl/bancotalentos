<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\UnidadeFederacao;

/**
 * Class UnidadeFederacaoTransformer
 * @package namespace Sip\Transformers;
 */
class UnidadeFederacaoTransformer extends TransformerAbstract
{

    /**
     * Transform the \UnidadeFederacao entity
     * @param \UnidadeFederacao $model
     *
     * @return array
     * 
     */
    protected $defaultIncludes = ['pais'];
    public function transform(UnidadeFederacao $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          => $model->nome,
            'sigla'         => $model->sigla,
            'pais_id'       => $model->pais_id

        ];
        
    }
    public function includePais(UnidadeFederacao $unidadeFederacao) {
        return $this->item($unidadeFederacao->pais, New PaisTransformer());
    }
}
