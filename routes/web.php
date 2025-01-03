<?php

use App\Http\Controllers\BlokTersediaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasSekitarController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-event', function () {
    $data = [
        'id_gci' => 'GCI2501020001',
    ];
    // Trigger event
    dd(event(new \App\Events\BookingCreated($data)));
    return 'Event telah dijalankan';
});
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('dashboard/detail/{id_project}', [DashboardController::class, 'detail'])->name('detail');
Route::get('project/{id_project}', [ProjectController::class, 'index'])->name('project');
Route::get('fasilitas/{id_project}', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('fasilitas_sekitar/grouped/{id_project}', [FasilitasSekitarController::class, 'grouped'])->name('fasilitas.sekitar.grouped');
Route::get('fasilitas_sekitar/{id_project}', [FasilitasSekitarController::class, 'index'])->name('fasilitas.sekitar');
Route::get('blok_tersedia/{id_project}', [BlokTersediaController::class, 'index'])->name('blok');
Route::get('blok_tersedia_grouped/{id_project}', [BlokTersediaController::class, 'grouped'])->name('blok.grouped');
Route::get('get_csrf', function () {
    echo csrf_field();
});
Route::post('simpan_booking', [BookingController::class, 'simpan_booking'])->name('simpan_booking');
