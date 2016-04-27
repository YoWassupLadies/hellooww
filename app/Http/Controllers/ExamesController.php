<?php

namespace App\Http\Controllers;

use App\TipoExame;
use Illuminate\Http\Request;

use App\Http\Requests;

class ExamesController extends Controller
{
    public function showfeitos()
    {

        $tiposDeExamesFeitos = TipoExame::with('exames')
            ->whereHas('exames', function($query){
                $query->where('feito', '=' , true);
            })
            ->get();

        return view('Admin.examesfeitos', compact('tiposDeExamesFeitos'));
    }

    public function shownaofeitos()
    {

        $tiposDeExamesNaoFeitos = TipoExame::with('exames')
            ->whereHas('exames', function($query){
                $query->where('feito', '=' , false);
            })
            ->get();

        return view('Admin.examesnaofeitos', compact('tiposDeExamesNaoFeitos'));
    }
}
