<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class PessoaContato extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'pessoa_contato';
    public $timestamps = true;

    protected $fillable = [
        'pessoa_id',
        'contato_id',
        'valor'
        
    ];
    function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }

    function contato(){
        return $this->belongsTo(Contato::class);
    }

}
