<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

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
            $mensagemErro = 'Este e-mail já está cadastrado.';
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
            $mensagemCerto = 'O(a) PROFESSOR foi cadastrado com sucesso!';
        } else {
            $mensagemCerto = 'O(a) ALUNO foi cadastrado com sucesso!';
        }
        return redirect()->route('cadastro')->with('mensagemCerto', $mensagemCerto);
    }
}
