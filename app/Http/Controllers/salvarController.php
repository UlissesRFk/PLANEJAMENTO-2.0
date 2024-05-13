<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class salvarController extends Controller
{
    public function salvar_cadastro(Request $request){
        $pessoa = new Pessoa();
        $pessoa->nome = $request->nome;
        $pessoa->email = $request->email;
        $pessoa->senha = bcrypt($request->senha);
        $pessoa->tipo = $request->tipo;
        $pessoa->save();
        return redirect('cadastro')->with('sucess','Você foi cadastrado com sucesso!');
    }
}
