<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 20:35
 */

namespace Sip\Validators;


use Prettus\Validator\LaravelValidator;

class TafValidator extends LaravelValidator
{
    protected $rules = [
        
        'pessoa_id'             => 'required',
        'nr_taf'                => 'required|integer',
        'ano'                   => 'required',
        'chamada'               => 'required',
        'data_realizacao'       => 'required',
        'mencao'                => 'required',
        'suficiencia'           => 'required',
        'situacao'              => 'required',
        'documento'             => 'required'
    ];

}
