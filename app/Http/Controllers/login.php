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
            'senha' => 'required'
        ];

        $request->validate($regras);

        $pessoas = Pessoa::where('email', $request ->email)->first();
        if($pessoas && password_verify($request->senha, $pessoas->senha)){
            return view('InicioAluno', ['pessoas' => $pessoas]);
        } else{
            $mensagemErro = "Sua senha ou o seu E-mail está errado!";
            return redirect()->back()->withInput()->withErrors(['mensagemErro', $mensagemErro]);
        }
        
    }
}
  

