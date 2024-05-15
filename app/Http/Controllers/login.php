<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class login extends Controller
{
     public function login(){
        return view('login');
    }

    public function autenticar(Request $request){
        $regras = [
            'email' => 'email',
            'senha' => 'required',
            'tipo' => 'tipo'
        ];

        $request->validate($regras);

        $pessoa = Pessoa::where('email', $request ->email)->first();
        if($pessoa && password_verify($request->senha, $pessoa->senha)){
            $tipo = $pessoa->tipo;
            if($tipo == 0){
                return view('aluno.InicioAluno', ['pessoa' => $pessoa]);
            }
            elseif($tipo == 1){
                return view('professor.InicioProfessor', ['pessoa' => $pessoa]);
        } 
        }else{
            $mensagemErro = "Sua senha ou o seu E-mail está errado!";
            return redirect()->back()->withInput()->withErrors(['mensagemErro' => $mensagemErro]);
         }             
    }
}
  

