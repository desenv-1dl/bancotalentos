<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Contato extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'contato';
    public $timestamps = false;
    protected $fillable = [
        'nome'
    ];
    function pessoaContato(){
        return $this->hasMany(PessoaContato::class);
    }

}
