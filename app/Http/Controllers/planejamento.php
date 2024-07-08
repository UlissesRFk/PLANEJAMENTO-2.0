<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feriado;

class planejamento extends Controller
{
    public function Cadastroferiados()
    {
        return view('cadastroferiado');
    }

    public function feriadosView()
    {
        $feriados = Feriado::all();
        $feriados = Feriado::orderBy('data')->get();
        return view('feriadosview', compact('feriados'));
    }

    public function feriadosdeletar(){
        $feriados = Feriado::all();
        $feriados = Feriado::orderBy('data')->get();
        return view('feriados', compact('feriados'));
    }

    public function SalvarFeriado(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data' => 'required|date',
            'nome_mes' => 'required|string|max:255',
        ]);

        Feriado::create([
            'nome' => $request->input('nome'),
            'data' => $request->input('data'),
            'nome_mes' => $request->input('nome_mes'),
        ]);

        return redirect()->route('CadastroFeriados');
    }

    public function deletarFeriado($id)
    {
        $feriado = Feriado::findOrFail($id);
        $feriado->delete();
        return redirect()->route('CadastroFeriados');
    }

    public function InicioProfessor()
    {
        return view('professor/InicioProfessor');
    }
}
