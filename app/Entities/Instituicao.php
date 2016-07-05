<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Instituicao extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'instituicao';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'nome_abrev'
    ];
    function pessoaAtividade(){
        return $this->hasMany(PessoaAtividade::class);
    }

}
