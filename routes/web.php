<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('project/{id_project}', [ProjectController::class, 'index'])->name('project');
Route::get('fasilitas/{id_project}', [FasilitasController::class, 'index'])->name('fasilitas');
