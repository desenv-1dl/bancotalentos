<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\PessoaContato;

/**
 * Class PessoaContatoTransformer
 * @package namespace Sip\Transformers;
 */
class PessoaContatoTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['pessoa', 'contato'];

    /**
     * Transform the \PessoaContato entity
     * @param \PessoaContato $model
     *
     * @return array
     */
    public function transform(PessoaContato $model)
    {
        return [
            'id'                => (int) $model->id,
            'pessoa_id'         => $model->pessoa_id,
            'contato_id'        => $model->contato_id,
            'valor'             => $model->valor,
            'created_at'        => $model->created_at,
            'updated_at'        => $model->updated_at
        ];
    }
    public function includePessoa(PessoaContato $pessoaContato) {
        return $this->item($pessoaContato->pessoa, New PessoaTransformer());
    }

    public function includeContato(PessoaContato $pessoaContato) {
        return $this->item($pessoaContato->contato, New ContatoTransformer());
    }
}
