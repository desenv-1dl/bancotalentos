<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Tat;

/**
 * Class TatTransformer
 * @package namespace Sip\Transformers;
 */
class TatTransformer extends TransformerAbstract
{

    /**
     * Transform the \Tat entity
     * @param \Tat $model
     *
     * @return array
     */
    public function transform(Tat $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
