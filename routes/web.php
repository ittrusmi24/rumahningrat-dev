<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('fasilitas/{id_project}', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('dashboard/detail', [DashboardController::class, 'detail'])->name('detail');
