<?php

namespace Sip\Transformers;

use League\Fractal\TransformerAbstract;
use Sip\Entities\Pessoa;

/**
 * Class PessoaTransformer
 * @package namespace Sip\Transformers;
 */
class PessoaTransformer extends TransformerAbstract
{

    protected $defaultIncludes = ['nivelFuncional','organizacao','genero','formacao','bairro', 'municipio'];
    /**
     * Transform the \Pessoa entity
     * @param \Pessoa $model
     *
     * @return array
     */
    public function transform(Pessoa $model)
    {
        return [
            'id'                    => (int) $model->id,
            'nome'                  => $model->nome,
            'nome_guerra'           => $model->nome_guerra,
            'cpf'                   => $model->cpf,
            'pessoa'                => $model->pessoa,
            'nivel_funcional_id'    => $model->nivel_funcional_id,
            'organizacao_id'        => $model->organizacao_id,
            'genero_id'             => $model->genero_id,
            'formacao_id'           => $model->formacao_id,
            'data_nascimento'       => $model->data_nascimento,
            'endereco'              => $model->endereco,
            'numero'                => $model->numero,
            'complemento'           => $model->complemento,
            'cep'                   => $model->cep,
            'bairro_id'             => $model->bairro_id,
            'municipio_id'          => $model->municipio_id,
            'observacao'            => $model->observacao,
            'ativo'                 => $model->ativo,
            'created_at'            => $model->created_at,
            'updated_at'            => $model->updated_at
        ];
    }
    
    public function includeNivelFuncional(Pessoa $pessoa) {
        return $this->item($pessoa->nivelFuncional, New NivelFuncionalTransformer());
    }
    public function includeOrganizacao(Pessoa $pessoa) {
        return $this->item($pessoa->organizacao, New OrganizacaoTransformer());
    }
    public function includeGenero(Pessoa $pessoa) {
        return $this->item($pessoa->genero, New GeneroTransformer());
    }
    public function includeFormacao(Pessoa $pessoa) {
        return $this->item($pessoa->formacao, New FormacaoTransformer());
    }
    public function includeBairro(Pessoa $pessoa) {
        if($pessoa->bairro){
            return $this->item($pessoa->bairro, New BairroTransformer());
        }
        
    }
    public function includeMunicipio(Pessoa $pessoa) {
        return $this->item($pessoa->municipio, New MunicipioTransformer());
    }
}
