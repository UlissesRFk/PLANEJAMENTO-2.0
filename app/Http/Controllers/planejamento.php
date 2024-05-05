<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class planejamento extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }

    public function login(){
        return view('login');
    }

    public function feriados(){
        return view('feriados');
    }

    public function InicioAluno(){
        return view('InicioAluno');
    }
}
