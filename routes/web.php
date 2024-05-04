<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\planejamento;

Route::get('/',[planejamento::class,'cadastro'])->name('cadastro');

Route::get('/login', [planejamento:: class, 'login'])->name('login');

Route::get('/feriados', [planejamento:: class, 'feriados']) ->name('feriados');

Route:: fallback( function(){
    return view('fallback');
});