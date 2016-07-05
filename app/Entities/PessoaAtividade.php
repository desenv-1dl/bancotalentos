<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class PessoaAtividade extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'pessoa_atividade';
    public $timestamps = true;

    protected $fillable = [
        'pessoa_id',
        'modalidade_id',
        'atividade_id',
        'instituicao_id',
        'custo_atividade',
        'bi',
        'municipio_id',
        'ano',
        'carga_horaria'
    ];
    function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
    function atividade(){
        return $this->belongsTo(Atividade::class);
    }
    function modalidade(){
        return $this->belongsTo(Modalidade::class);
    }
    function instituicao(){
        return $this->belongsTo(Instituicao::class);
    }
    function municipio(){
        return $this->belongsTo(Municipio::class);
    }

}
