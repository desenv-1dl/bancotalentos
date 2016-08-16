<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 20:35
 */

namespace Sip\Validators;


use Prettus\Validator\LaravelValidator;

class PessoaValidator extends LaravelValidator
{
    protected $rules = [
        'nome'                  => 'required',
        'nome_guerra'           => 'required',
        'cpf'                   => 'required',
        'nivel_funcional_id'    => 'required',
        'organizacao_id'        => 'required',
        'genero_id'             => 'required',
        'formacao_id'           => 'required',
        'data_nascimento'       => 'required',
        'endereco'              => 'required',
        'numero'                => 'required',
        'cep'                   => 'required',
        'bairro_id'             => 'required',
        'municipio_id'          => 'required'
    ];

}
