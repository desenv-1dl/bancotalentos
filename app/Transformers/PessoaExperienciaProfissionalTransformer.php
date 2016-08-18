<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\PessoaExperienciaProfissional;

/**
 * Class PessoaExperienciaProfissionalTransformer
 * @package namespace Sip\Transformers;
 */
class PessoaExperienciaProfissionalTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['pessoa', 'experienciaProfissional'];

    /**
     * Transform the \PessoaExperienciaProfissional entity
     * @param \PessoaExperienciaProfissional $model
     *
     * @return array
     */
    public function transform(PessoaExperienciaProfissional $model)
    {
        return [
            'id'                            => (int) $model->id,
            'pessoa_id'                     => $model->pessoa_id,
            'experiencia_profissional_id'   => $model->experiencia_profissional_id,
            'data_inicio'                   => $model->data_inicio,
            'data_fim'                      => $model->data_fim,
            'created_at'                    => $model->created_at,
            'updated_at'                    => $model->updated_at
        ];
        
    }
    public function includePessoa(PessoaExperienciaProfissional $pessoaExperienciaProfissional) {
        return $this->item($pessoaExperienciaProfissional->pessoa, New PessoaTransformer());
    }

    public function includeExperienciaProfissional(PessoaExperienciaProfissional $pessoaExperienciaProfissional) {
        return $this->item($pessoaExperienciaProfissional->experienciaProfissional, New ExperienciaProfissionalTransformer());
    }
}
