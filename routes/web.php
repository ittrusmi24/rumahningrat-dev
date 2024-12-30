<?php

use App\Http\Controllers\BlokTersediaController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasSekitarController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('project/{id_project}', [ProjectController::class, 'index'])->name('project');
Route::get('fasilitas/{id_project}', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('fasilitas_sekitar/{id_project}', [FasilitasSekitarController::class, 'index'])->name('fasilitas.sekitar');
Route::get('blok_tersedia/{id_project}', [BlokTersediaController::class, 'index'])->name('blok.tersedia');
