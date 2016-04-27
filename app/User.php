<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function turmas(){

        return $this->belongsToMany('App\Turma', 'users_turmas');
    }

    public function tipousers(){

        return $this->belongsTo(TipoUser::class, 'id');
    }

    public function notas(){

        return $this->hasMany(Nota::class);
    }
}
