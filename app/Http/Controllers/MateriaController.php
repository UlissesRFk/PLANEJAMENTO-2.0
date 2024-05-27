<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Materia;

class MateriaController extends Controller
{
    public function salvarMaterias(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'pessoa_id' => 'required|exists:pessoas,id',
            'materia_id' => 'required|exists:materias,id', 
        ]);    

        // Encontrar a pessoa pelo ID
        $pessoa = Pessoa::findOrFail($request->pessoa_id);
        
        // Encontrar a matéria pelo ID
        $materia = Materia::findOrFail($request->materia_id);
        
        // Associar a matéria à pessoa
        $pessoa->materia()->associate($materia);
        
        // Salvar as alterações
        $pessoa->save();
        
        // Redirecionar para a rota desejada (por exemplo, cadastro)
        return redirect()->route('cadastro');
    }
}
