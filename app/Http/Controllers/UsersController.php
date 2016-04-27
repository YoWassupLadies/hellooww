<?php

namespace App\Http\Controllers;

use App\TipoUser;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function showadmins(){

        $admins = TipoUser::where('nome', 'Administrador')->get();



        return view('Admin.admins', compact('admins'));
    }

    public function showprofs(){

        $profs = TipoUser::where('nome', 'Professor')->get();



        return view('Admin.professores', compact('profs'));
    }

    public function showalunos(){

        $alunos = TipoUser::where('nome', 'Aluno')->get();



        return view('Admin.alunos', compact('alunos'));
    }
}
