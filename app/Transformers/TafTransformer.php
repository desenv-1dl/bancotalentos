<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Taf;

/**
 * Class TafTransformer
 * @package namespace Sip\Transformers;
 */
class TafTransformer extends TransformerAbstract
{

    /**
     * Transform the \Taf entity
     * @param \Taf $model
     *
     * @return array
     */
    protected $defaultIncludes = ['pessoa'];
    public function transform(Taf $model)
    {
        return [
            'id'                => (int) $model->id,
            'pessoa_id'         =>$model->pessoa_id,
            'nr_taf'            =>$model->nr_taf,
            'ano'               =>$model->ano,
            'chamada'           =>$model->chamada,
            'data_realizacao'   =>$model->data_realizacao,
            'mencao'            =>$model->mencao,
            'suficiencia'       =>$model->suficiencia,
            'situacao'          =>$model->situacao,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
