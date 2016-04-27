<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    public function notas(){

        return $this->hasMany(Nota::class);
    }

    public function tipoexame(){

        return $this->belongsTo(TipoExame::class);
    }
}
