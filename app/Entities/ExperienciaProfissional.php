<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ExperienciaProfissional extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'experiencia_profissional';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'nome_abrev'
    ];
    function pessoaExperienciaProfissional(){
        return $this->hasMany(PessoaExperienciaProfissional::class);
    }

}
