<?php

namespace App\Http\Controllers;

use App\Disciplina;
use App\TipoNivel;
use Illuminate\Http\Request;

use App\Http\Requests;

class DisciplinasController extends Controller
{
    public function show(){

        $tiposDeNivel = TipoNivel::all();



        return view('Admin.disciplinas', compact('tiposDeNivel'));
    }
}
