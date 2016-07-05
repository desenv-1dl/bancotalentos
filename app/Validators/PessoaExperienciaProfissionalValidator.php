<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 20:35
 */

namespace Sip\Validators;


use Prettus\Validator\LaravelValidator;

class PessoaExperienciaProfissionalValidator extends LaravelValidator
{
    protected $rules = [
        'pessoa_id'                         => 'required|integer',
        'experiencia_profissional_id'       => 'required|integer'
    ];

}
