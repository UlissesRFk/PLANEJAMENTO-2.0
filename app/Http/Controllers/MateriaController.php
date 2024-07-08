<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Materia;

class MateriaController extends Controller
{
    public function salvarMaterias(Request $request)
    {
        $request->validate([
            'pessoa_id' => 'required|exists:pessoas,id',
            'materia_id' => 'required|exists:materias,id', 
        ]);    

        $pessoa = Pessoa::findOrFail($request->pessoa_id);
        $materia = Materia::findOrFail($request->materia_id);
        $pessoa->materia()->associate($materia);
        $pessoa->save();
        return redirect()->route('cadastro');
    }
}
