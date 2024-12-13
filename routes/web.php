<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home\Inicio;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//llamo al componente como si fuera un controlador
Route::get('/Inicio', Inicio::class)->name('inicio');