<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Condecoracao extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'condecoracao';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'nome_abrev'
    ];
    function pessoaCondecoracao(){
        return $this->hasMany(PessoaCondecoracao::class);
    }

}
