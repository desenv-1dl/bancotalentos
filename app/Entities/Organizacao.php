<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Organizacao extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'organizacao';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'nome_abrev'
    ];
    function pessoa(){
        return $this->hasMany(Pessoa::class);
    }

}
