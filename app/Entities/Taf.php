<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Taf extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'taf';
    public $timestamps = true;
    
    protected $fillable = [
        'pessoa_id',
        'nr_taf',
        'ano',
        'chamada',
        'data_realizacao',
        'mencao',
        'suficiencia',
        'situacao',
        'documento'
    ];
    function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }

}
