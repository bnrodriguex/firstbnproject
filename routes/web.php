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
Route::get('/funcionario', [FuncionarioController::class,'index'])->name ('categoria.index');
                                                                            //PADRONIZAÇÃO
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');

Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

// Categoria

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
                                                                        //PADRONIZAÇÃO

Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');

Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');


                                                                



