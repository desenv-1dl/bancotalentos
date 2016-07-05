<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\PessoaAtividade;

/**
 * Class PessoaAtividadeTransformer
 * @package namespace Sip\Transformers;
 */
class PessoaAtividadeTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['pessoa', 'atividade','modalidade','instituicao','municipio'];

    /**
     * Transform the \PessoaAtividade entity
     * @param \PessoaAtividade $model
     *
     * @return array
     */
    public function transform(PessoaAtividade $model)
    {
        return [
            'id'                => (int) $model->id,
            'pessoa_id'         => $model->pessoa_id,
            'modalidade_id'     => $model->modalidade_id,
            'atividade_id'      => $model->atividade_id,
            'instituicao_id'    => $model->instituicao_id,
            'custo_atividade'   => $model->custo_atividade,
            'bi'                => $model->bi,
            'municipio_id'      => $model->municipio_id,
            'ano'               => $model->ano,
            'carga_horaria'     => $model->carga_horaria,
            'created_at'        => $model->created_at,
            'updated_at'        => $model->updated_at
        ];
    }
    public function includePessoa(PessoaAtividade $pessoaAtividade) {
        return $this->item($pessoaAtividade->pessoa, New PessoaTransformer());
    }
    public function includeAtividade(PessoaAtividade $pessoaAtividade) {
        if($atividade = $pessoaAtividade->atividade){
            return $this->item($atividade, New AtividadeTransformer());
        }
     }
    public function includeModalidade(PessoaAtividade $pessoaAtividade) {
        return $this->item($pessoaAtividade->modalidade, New ModalidadeTransformer());
    }
    public function includeInstituicao(PessoaAtividade $pessoaAtividade) {
        return $this->item($pessoaAtividade->instituicao, New InstituicaoTransformer());
    }
    public function includeMunicipio(PessoaAtividade $pessoaAtividade) {
        return $this->item($pessoaAtividade->municipio, New MunicipioTransformer());
    }
}
