
<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\planejamento;
use  App\Http\Controllers\login;
use  App\Http\Controllers\cadastro;
use  App\Http\Controllers\MateriaController;

Route::get('/cadastro',[cadastro::class,'mostrarFormulario'])->name('cadastro');
Route::post('/salvar_cadastro',[cadastro::class, 'salvarCadastro']) -> name('salvarCadastro');

Route::get('/escolher_materia/{id}', [Cadastro::class, 'escolherMateria'])->name('selecionarMateria');
Route::post('/salvar_materias', [MateriaController::class, 'salvarMaterias'])->name('salvarMaterias');


Route::get('/', [login::class, 'login'])->name('login');
Route::post('/', [login::class, 'autenticar'])->name('autenticar');

Route::prefix('/aluno')->group(function(){
    Route::get('/planejamento', [planejamento::class, 'planejamento'])->name('panejamento');
}); 

Route::prefix('/professor')->group(function(){
    Route::get('/inicio', [planejamento::class, 'InicioProfessor'])->name('InicioProfessor');
    Route::get('/planejamento', [planejamento::class, 'planejamento'])->name('panejamento');
}); 


Route:: fallback( function(){
    return view('fallback');
});
Route::get('/feriados', [planejamento::class, 'feriadosView'])->name('feriadosView');
Route::get('/feriadosDeletar', [planejamento::class, 'feriadosdeletar'])->name('feriadosdeletar');
Route::get('/Cadastrar Feriados', [planejamento::class, 'Cadastroferiados'])->name('CadastroFeriados');
Route::post('/Salvarferiado', [planejamento::class, 'SalvarFeriado'])->name('SalvarFeriado');
Route::delete('/feriados/{id}/delete', [planejamento::class, 'DeletarFeriado'])->name('DeletarFeriado');
