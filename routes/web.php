<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home\Inicio;
use App\Livewire\Categoria\CategoriaComponente;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//llamo al componente como si fuera un controlador
Route::get('/Inicio', Inicio::class)->name('inicio');

Route::get('/Categorias', CategoriaComponente::class)->name('categorias');