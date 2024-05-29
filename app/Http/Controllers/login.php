<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Materia;

class login extends Controller
{
    public function login(){
        $loginSuccess = null;
        $loginError = null;
        return view('login', compact('loginSuccess', 'loginError'));
    }

    public function autenticar(Request $request){
        $regras = [
            'email' => 'email',
            'senha' => 'required',
            'tipo' => 'tipo'
        ];

        $request->validate($regras);

        $pessoa = Pessoa::where('email', $request->email)->first();
        if ($pessoa && password_verify($request->senha, $pessoa->senha)) {
            $request->session()->flash('loginSuccess', true);
            $tipo = $pessoa->tipo;
            if ($tipo == 1) {
                return view('professor.InicioProfessor', ['pessoa' => $pessoa]);
            } elseif ($tipo == 0) {
                $turmas = $pessoa->materias_id;
                switch ($turmas) {
                    case 1:
                        return view('aluno.turmaDS1', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    case 2:
                        return view('aluno.turmaDS2', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    case 3:
                        return view('aluno.turmaDS3', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    case 4:
                        return view('aluno.turmaCTB1', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    case 5:
                        return view('aluno.turmaCTB2', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    case 6:
                        return view('aluno.turmaCTB3', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    case 7:
                        return view('aluno.turmaMULT1', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    case 8:
                        return view('aluno.turmaMULT2', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    case 9:
                        return view('aluno.turmaMULT3', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    case 10:
                        return view('aluno.turmaRDS', ['pessoa' => $pessoa, 'turmas' => $turmas]);
                    default:
                        return redirect()->back()->withErrors(['mensagemErro' => 'Turma não encontrada.']);
                }
            }
        } else {
            $request->session()->flash('loginError', true);
            return redirect()->back()->withErrors(['mensagemErro' => 'Credenciais inválidas.']);
        }
    }
}
