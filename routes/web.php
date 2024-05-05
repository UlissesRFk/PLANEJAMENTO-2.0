<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\planejamento;

Route::get('/cadastro',[planejamento::class,'cadastro'])->name('cadastro');

Route::get('/', [planejamento::class, 'login'])->name('login');

Route::prefix('/aluno')->group(function(){
    Route::get('/inicio', [planejamento::class, 'InicioAluno'])->name('InicioAluno');
    Route::get('/planejamento', [planejamento::class, 'planejamento'])->name('panejamento');
}); 


Route:: fallback( function(){
    return view('fallback');
});
Route::get('/feriados', [planejamento::class, 'feriados'])->name('feriados');
