<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\planejamento;
use  App\Http\Controllers\login;
use  App\Http\Controllers\cadastro;
use  App\Http\Controllers\salvarController;

Route::get('/cadastro',[cadastro::class,'index'])->name('cadastro');
Route::post('/salvar_cadastro',[salvarController::class, 'salvar_cadastro']) -> name('salvar_cadastro');

Route::get('/', [login::class, 'login'])->name('login');
Route::post('/', [login::class, 'autenticar'])->name('autenticar');

Route::prefix('/aluno')->group(function(){
    Route::get('/inicio', [planejamento::class, 'InicioAluno'])->name('InicioAluno');
    Route::get('/planejamento', [planejamento::class, 'planejamento'])->name('panejamento');
}); 


Route:: fallback( function(){
    return view('fallback');
});
Route::get('/feriados', [planejamento::class, 'feriados'])->name('feriados');
