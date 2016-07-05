<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class PessoaCondecoracao extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'pessoa_condecoracao';
    public $timestamps = true;

    protected $fillable = [
        'pessoa_id',
        'condecoracao_id',
        'data_indicacao',
        'data_condecoracao'
    ];
    function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }

    function condecoracao(){
        return $this->belongsTo(Condecoracao::class);
    }

}
