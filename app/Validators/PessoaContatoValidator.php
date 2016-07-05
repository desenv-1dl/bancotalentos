<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 20:35
 */

namespace Sip\Validators;


use Prettus\Validator\LaravelValidator;

class PessoaContatoValidator extends LaravelValidator
{
    protected $rules = [
        'pessoa_id'         => 'required|integer',
        'contato_id'        => 'required|integer',
        'valor'             => 'required|max:255|min:3',
    ];

}
