<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class PessoaExperienciaProfissional extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'pessoa_experiencia_profissional';
    public $timestamps = true; 

    protected $fillable = [
        'pessoa_id',
        'experiencia_profissional_id',
        'data_inicio',
        'data_fim',
        'observacao'
    ];
    function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }

    function experienciaProfissional(){
        return $this->belongsTo(ExperienciaProfissional::class);
    }

}
