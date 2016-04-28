<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function buscardados(){

        $turmasUser = Turma::lists('nome', 'id');
        $dadosUser = Auth::User();

        $dadosPerfil = [$turmasUser, $dadosUser];

        return view('Admin/profile', compact('dadosPerfil'));
    }
}
