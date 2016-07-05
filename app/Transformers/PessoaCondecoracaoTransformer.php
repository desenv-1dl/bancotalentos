<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\PessoaCondecoracao;

/**
 * Class PessoaCondecoracaoTransformer
 * @package namespace Sip\Transformers;
 */
class PessoaCondecoracaoTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['pessoa', 'condecoracao'];

    /**
     * Transform the \PessoaCondecoracao entity
     * @param \PessoaCondecoracao $model
     *
     * @return array
     */
    public function transform(PessoaCondecoracao $model)
    {
        return [
            'id'                => (int) $model->id,
            'pessoa_id'         => $model->pessoa_id,
            'condecoracao_id'   => $model->condecoracao_id,
            'data_indicacao'    => $model->data_indicacao,
            'data_condecoracao' => $model->data_condecoracao,
            'created_at'        => $model->created_at,
            'updated_at'        => $model->updated_at
        ];
    }
    public function includePessoa(PessoaCondecoracao $pessoaCondecoracao) {
        return $this->item($pessoaCondecoracao->pessoa, New PessoaTransformer());
    }

    public function includeCondecoracao(PessoaCondecoracao $pessoaCondecoracao) {
        return $this->item($pessoaCondecoracao->condecoracao, New CondecoracaoTransformer());
    }
}
