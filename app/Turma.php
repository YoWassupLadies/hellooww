<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public function users(){
        
        return $this->belongsToMany('App\User', 'users_turmas');
    }

    public function disciplinas(){

        return $this->belongsToMany('App\Disciplina', 'turmas_disciplinas');
    }
}
