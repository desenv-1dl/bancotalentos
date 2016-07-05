<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 20:35
 */

namespace Sip\Validators;


use Prettus\Validator\LaravelValidator;

class GeneroValidator extends LaravelValidator
{
    protected $rules = [
        'nome'    => 'required',
        'nome_abrev'      => 'required'
    ];

}
