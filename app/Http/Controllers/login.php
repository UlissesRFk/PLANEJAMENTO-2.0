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
         
         $credentials = $request->only('email', 'senha');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->tipo == 1 && !ends_with($user->email, '@professor.ce.gov.br')) {
                Auth::logout();
                return redirect()->back()->withErrors(['email' => 'Apenas professores podem usar este e-mail.']);
            } elseif ($user->tipo == 2 && !ends_with($user->email, '@aluno.ce.gov.br')) {
                Auth::logout();
                return redirect()->back()->withErrors(['email' => 'Apenas alunos podem usar este e-mail.']);
            }

            if($user -> tipo == 0){
                return view('aluno/InicioAluno');
            }
            if($user -> tipo == 1)
            return view('professor/InicioProfessro');
        }
        return redirect()->back()->withErrors(['senha' => 'Credenciais inválidas.']);
    }
    }

        
  

