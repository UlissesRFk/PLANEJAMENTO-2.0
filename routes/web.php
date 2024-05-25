
<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\planejamento;
use  App\Http\Controllers\login;
use  App\Http\Controllers\cadastro;



Route::get('/cadastro',[cadastro::class,'mostrarFormulario'])->name('cadastro');
Route::post('/salvar_cadastro',[cadastro::class, 'salvarCadastro']) -> name('salvarCadastro');

Route::get('/', [login::class, 'login'])->name('login');
Route::post('/', [login::class, 'autenticar'])->name('autenticar');

Route::prefix('/aluno')->group(function(){
    Route::get('/inicio', [planejamento::class, 'InicioAluno'])->name('InicioAluno');
    Route::get('/planejamento', [planejamento::class, 'planejamento'])->name('panejamento');
}); 

Route::prefix('/professor')->group(function(){
    Route::get('/inicio', [planejamento::class, 'InicioAluno'])->name('InicioProfessor');
    Route::get('/planejamento', [planejamento::class, 'planejamento'])->name('panejamento');
}); 


Route:: fallback( function(){
    return view('fallback');
});
Route::get('/feriados', [planejamento::class, 'feriados'])->name('feriados');
