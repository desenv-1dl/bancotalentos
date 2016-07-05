<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Atividade extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'atividade';
    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'nome',
        'idioma'
    ];
    function pessoaAtividade(){
        return $this->hasMany(PessoaAtividade::class);
    }

}
