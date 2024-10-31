<?php

use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;



Route::get('/',[controladorVistas::class,'welcome'])->name('welcome');

Route::get('/registro',[controladorVistas::class,'form'])->name('rutaform');

Route::post('/enviarLibro',[controladorVistas::class,'procesarLibro']);