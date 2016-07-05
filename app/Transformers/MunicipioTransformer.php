<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Municipio;

/**
 * Class MunicipioTransformer
 * @package namespace Sip\Transformers;
 */
class MunicipioTransformer extends TransformerAbstract
{

    /**
     * Transform the \Municipio entity
     * @param \Municipio $model
     *
     * @return array
     */
    protected $defaultIncludes = ['unidadeFederacao'];
    
    public function transform(Municipio $model)
    {
        return [
            'id'                    => (int) $model->id,
            'nome'                  => $model->nome,
            'sigla'                 => $model->sigla,
            'unidade_federacao_id'  => $model->unidade_federacao_id
        ];
    }
    public function includeUnidadeFederacao(Municipio $municipio) {
        return $this->item($municipio->unidadeFederacao, New UnidadeFederacaoTransformer());
    }
}
