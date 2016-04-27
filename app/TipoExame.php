<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoExame extends Model
{
    public function exames(){

        return $this->hasMany(Exame::class);
    }
}
