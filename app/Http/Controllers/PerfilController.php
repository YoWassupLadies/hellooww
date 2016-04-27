<?php

namespace App\Http\Controllers;

use App\TipoUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function buscardados(){

        $tiposUser = TipoUser::all();
        $dadosUser = Auth::User();

        $dadosPerfil = [$tiposUser, $dadosUser];

        return view('Admin/profile', compact('dadosPerfil'));
    }
}
