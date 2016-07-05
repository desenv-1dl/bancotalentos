<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Modalidade extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'modalidade';
    public $timestamps = false;

    protected $fillable = [
        'nome'
    ];
    function pessoaModalidade(){
        return $this->hasMany(PessoaAtividade::class);
    }

}
