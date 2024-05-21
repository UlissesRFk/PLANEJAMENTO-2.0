<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Materia;

class cadastro extends Controller
{
    public function index(){
        return view('cadastro');
    }
    public function aluno_materia(Request $request){
        $pessoa = Pessoa:: where('tipo', $tipo) -> get();
        $tipo = $pessoa -> $tipo;
        return view('cadastro', compact('pessoa', 'tipo'));
    }


}
