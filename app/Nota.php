<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public function exames(){

        return $this->belongsTo(Exame::class);
    }

    public function users(){

        return $this->belongsTo(User::class);
    }

    public function disciplinas(){
        
        return $this->belongsTo(Disciplina::class);
    }
}
