<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CategoriaController;
 

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Funcionário 
Route::get('/funcionario', [FuncionarioController::class, 'index']);

// Categoria
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
                                                                //PADRONIZAÇÃO



