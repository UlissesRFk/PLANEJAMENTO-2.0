<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class planejamento extends Controller
{

    public function feriados(){
        return view('feriados');
    }

    public function InicioAluno(){
        return view('aluno/InicioAluno');
    }

    public function InicioProfessor(){
        return view('professor/InicioProfessor');
    }
}
