<?php

namespace App\Http\Controllers;

use App\TipoUser;
use App\Turma;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function shownumbers(){

        $turmas = Turma::all()->count();
        $alunos = User::where('tipo_user_id', '=', '3')
            ->get()
            ->count();
        $profs = User::where('tipo_user_id', '=', '2')
            ->get()
            ->count();

        $shownumbers = [$turmas, $alunos, $profs];

        return view('Admin.index', compact('shownumbers'));
    }
}
