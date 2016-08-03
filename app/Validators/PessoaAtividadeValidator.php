<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 20:35
 */

namespace Sip\Validators;


use Prettus\Validator\LaravelValidator;

class PessoaAtividadeValidator extends LaravelValidator
{
    protected $rules = [
        'pessoa_id'         => 'required|integer',
        'modalidade_id'     => 'required|integer',
        'atividade_id'      => 'required|integer',
        'instituicao_id'    => 'required|integer',
        'municipio_id'      => 'required|integer'
    ];

}
