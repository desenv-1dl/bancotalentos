<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 20:35
 */

namespace Sip\Validators;


use Prettus\Validator\LaravelValidator;

class ModalidadeValidator extends LaravelValidator
{
    protected $rules = [
        'nome'      => 'required|max:255|min:3'
    ];

}
