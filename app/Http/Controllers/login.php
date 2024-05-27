<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Materia;

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
                $turmas = $pessoa->materias_id;
                if($turmas == 1){
                    return view('aluno.turmaDS1', ['pessoa' => $pessoa, 'turmas' => $turmas]);}
                    elseif($turmas == 2){
                        return view('aluno.turmaDS2', ['pessoa' => $pessoa, 'turmas' => $turmas]);}
                    elseif($turmas == 3){
                        return view('aluno.turmaDS3', ['pessoa' => $pessoa, 'turmas' => $turmas]);}
                    elseif($turmas == 4){
                        return view('aluno.turmaCTB1', ['pessoa' => $pessoa, 'turmas' => $turmas]);}
                    elseif($turmas == 5){
                        return view('aluno.turmaCTB2', ['pessoa' => $pessoa, 'turmas' => $turmas]);}
                    elseif($turmas == 6){
                        return view('aluno.turmaCTB3', ['pessoa' => $pessoa, 'turmas' => $turmas]);}
                    elseif($turmas == 7){
                        return view('aluno.turmaMULT1', ['pessoa' => $pessoa, 'turmas' => $turmas]);}
                    elseif($turmas == 8){
                        return view('aluno.turmaMULT2', ['pessoa' => $pessoa, 'turmas' => $turmas]);}
                    elseif($turmas == 9){
                        return view('aluno.turmaMULT3', ['pessoa' => $pessoa, 'turmas' => $turmas]);}
                    elseif($turmas == 10){
                            return view('aluno.turmaRDS', ['pessoa' => $pessoa, 'turmas' => $turmas]);} 

                elseif($tipo == 1){
                    return view('professor.InicioProfessor', ['pessoa' => $pessoa]);
                } 
            }
        }
    }
}

        
  

