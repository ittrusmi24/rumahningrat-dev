<?php

use App\Http\Controllers\FasilitasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('fasilitas/{id_project}', [FasilitasController::class, 'index'])->name('fasilitas');
