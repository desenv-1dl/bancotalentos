<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Bairro;
use Sip\Transformers\MunicipioTransformer;

/**
 * Class BairroTransformer
 * @package namespace Sip\Transformers;
 */
class BairroTransformer extends TransformerAbstract
{

    protected $defaultIncludes = ['municipio'];


    /**
     * Transform the \Bairro entity
     * @param \Bairro $model
     *
     * @return array
     */
    public function transform(Bairro $model)
    {
        return [
            'id'            => (int) $model->id,
            'nome'          =>$model->nome,
            'sigla'         =>$model->sigla,
            'municipio_id'  =>$model->municipio_id
        ];
    }

    public function includeMunicipio(Bairro $bairro) {
        return $this->item($bairro->municipio, New MunicipioTransformer());
    }
}
