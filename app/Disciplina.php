<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function turmas(){

        return $this->belongsToMany('App\Turma', 'turmas_disciplinas');
    }

    public function notas(){

        return $this->hasMany(Nota::class);
    }

    public function tiponivel(){

        return $this->belongsTo(TipoNivel::class);
    }
}
