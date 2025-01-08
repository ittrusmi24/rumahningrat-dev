<?php

use App\Http\Controllers\BlokTersediaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasSekitarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UlasanController;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test', function () {
    $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));

    // Tambahkan 3 jam
    $date->modify('+3 hours');

    // Format tanggal ke "6 Januari 14:30:00"
    $months = [
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember'
    ];

    $formattedDate = $date->format('j F H:i:s');
    foreach ($months as $en => $id) {
        $formattedDate = str_replace($en, $id, $formattedDate);
    }

    echo "Waktu setelah 3 jam: $formattedDate\n";
});
Route::get('/test-event', function () {
    $data = [
        'id_gci' => 'GCI2501020001',
    ];
    // Trigger event
    dd(event(new \App\Events\BookingCreated($data)));
    return 'Event telah dijalankan';
});
// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/detail/{id_project}', [DashboardController::class, 'detail'])->name('detail');
Route::get('project/{id_project}', [ProjectController::class, 'index'])->name('project');
Route::get('ulasan/{id_project}', [UlasanController::class, 'index'])->name('ulasan');
Route::get('fasilitas/{id_project}', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('fasilitas_sekitar/grouped/{id_project}', [FasilitasSekitarController::class, 'grouped'])->name('fasilitas.sekitar.grouped');
Route::get('fasilitas_sekitar/{id_project}', [FasilitasSekitarController::class, 'index'])->name('fasilitas.sekitar');
Route::get('blok_tersedia/{id_project}', [BlokTersediaController::class, 'index'])->name('blok');
Route::get('blok_tersedia_grouped/{id_project}', [BlokTersediaController::class, 'grouped'])->name('blok.grouped');
Route::get('get_csrf', function () {
    echo csrf_field();
});
Route::post('simpan_booking', [BookingController::class, 'simpan_booking'])->name('simpan_booking');

Route::get('/vt/{id_project}', function ($id_project) {
    $project = Project::get_project_additional($id_project);
    $path = public_path('360_view/vt/' . $project->link_360 . '/index.htm');  // Ambil path dari link_360
    if (!file_exists($path)) {
        abort(404, 'Virtual tour not found');  // Tampilkan error jika file tidak ada
    }
    $content = file_get_contents($path);
    $content = str_replace('../', url('/') . '/360_view/vt/' . $project->link_360 . '/', $content);
    return view('virtual_tour', ['project' => $project, 'content' => $content]);
});

Route::get('/vt_view', [HomeController::class, 'vt_view'])->name('vt_view');
Route::get('/poi_view', [HomeController::class, 'poi_view'])->name('poi_view');
