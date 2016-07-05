<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 20:35
 */

namespace Sip\Validators;


use Prettus\Validator\LaravelValidator;

class PessoaCondecoracaoValidator extends LaravelValidator
{
    protected $rules = [
        'pessoa_id'             => 'required|integer',
        'condecoracao_id'       => 'required|integer',
        'data_indicacao'        => 'required|max:255|min:3',
        'data_condecoracao'     => 'required'
    ];

}
