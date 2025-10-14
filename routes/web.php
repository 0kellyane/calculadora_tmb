<?php

use App\Http\Controllers\TmbController;
use Illuminate\Support\Facades\Route;

// Exibe o formulário para inserir os dados
Route::get('/', [TmbController::class, 'showForm'])->name('tmb.form');

// Recebe os dados, calcula a TMB e exibe o resultado
Route::post('/calcular', [TmbController::class, 'calculate'])->name('tmb.calculate');
