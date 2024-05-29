<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Materia;


class Cadastro extends Controller
{
    public function mostrarFormulario(Request $request)
    {
        $mensagemErro = $request->session()->get('mensagemErro', null);
        $mensagemCerto = $request->session()->get('mensagemCerto', null);
        return view('cadastro', compact('mensagemErro', 'mensagemCerto'));
    }

    public function salvarCadastro(Request $request)
    {
        $emailCadastrado = Pessoa::where('email', $request->email)->exists();
        if ($emailCadastrado) {
            $mensagemErro = 'Este e-mail já está cadastrado';
            return redirect()->route('cadastro')->with('mensagemErro', $mensagemErro);
        }
        
            $request->validate([
                'nome' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:pessoas,email',
                'senha' => 'required|string',
                'tipo' => 'required|integer|in:0,1',
            ]);
    
            $pessoa = new Pessoa();
            $pessoa->nome = $request->nome;
            $pessoa->email = $request->email;
            $pessoa->senha = bcrypt($request->senha);
            $pessoa->tipo = $request->tipo;
            $pessoa->save();
        
        $tipo = $request->tipo;
        if ($tipo == 1) {
            $mensagemCerto = 'O(A) PROFESSOR foi cadastrado com sucesso!';
        } else {
            return redirect()->route('selecionarMateria', ['id' => $pessoa->id]);
        }

        return redirect()->route('cadastro')->with('mensagemCerto', $mensagemCerto);
    }

    public function escolherMateria($id) {
     $pessoa = Pessoa::findOrFail($id);
    $materias = Materia::all();
    return view('escolherMateria', compact('pessoa', 'materias'));
    }
}


