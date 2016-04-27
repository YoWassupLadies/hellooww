<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;

use App\Http\Requests;

class TurmasController extends Controller
{
    public function show(){

        $turmas = Turma::all();

        return view('Admin.turmas', compact('turmas'));

    }
}
