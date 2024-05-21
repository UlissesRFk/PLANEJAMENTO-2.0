<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Turma;

class salvarController extends Controller
{
    public function salvar_cadastro(Request $request)
    {
        $validar = [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pessoas',
            'senha' => 'required|string|min:8',
            'tipo' => 'required|integer'
        ];

        $pessoa = new Pessoa();
        $pessoa->nome = $request->nome;
        $pessoa->email = $request->email;
        $pessoa->senha = bcrypt($request->senha);
        $pessoa->tipo = $request->tipo;
        $pessoa->save();
        if($request->tipo == 0){
            return response()->json(['success' => true, 'pessoa_id' => $pessoa->id]);
        }else{
            return view('cadastro');
        } 
    }

    public function salvar_turma(Request $request)
    {
        $validar = [
            'pessoa_id' => 'required|exists:pessoas,id',
            'turma_id' => 'required|exists:turmas,id'
        ];
    
        $request->validate($validar);
    
        $pessoa = Pessoa::findOrFail($request->pessoa_id);
        $pessoa->turma_id = $request->turma_id;
        $pessoa->save();
    
        return redirect()->route('cadastro')->with('success', 'Turma atribuída com sucesso!');
    }
    
}

