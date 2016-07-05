<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 20:35
 */

namespace Sip\Validators;


use Prettus\Validator\LaravelValidator;

class AtividadeValidator extends LaravelValidator
{
    protected $rules = [
        'codigo'    => 'required',
        'nome'      => 'required|max:255|min:3',
        'idioma'    => 'required'
        
    ];

}
