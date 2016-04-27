<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoNivel extends Model
{
    public function disciplinas(){

        return $this->hasMany(Disciplina::class);
    }
}
