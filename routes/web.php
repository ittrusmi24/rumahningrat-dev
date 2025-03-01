<?php

use App\Http\Controllers\BlokTersediaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasSekitarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UlasanController;
use App\Models\Booking;
use App\Models\Konsumen;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/test', function () {
//     $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));

//     // Tambahkan 3 jam
//     $date->modify('+3 hours');

//     // Format tanggal ke "6 Januari 14:30:00"
//     $months = [
//         'January' => 'Januari',
//         'February' => 'Februari',
//         'March' => 'Maret',
//         'April' => 'April',
//         'May' => 'Mei',
//         'June' => 'Juni',
//         'July' => 'Juli',
//         'August' => 'Agustus',
//         'September' => 'September',
//         'October' => 'Oktober',
//         'November' => 'November',
//         'December' => 'Desember'
//     ];

//     $formattedDate = $date->format('j F H:i:s');
//     foreach ($months as $en => $id) {
//         $formattedDate = str_replace($en, $id, $formattedDate);
//     }

//     echo "Waktu setelah 3 jam: $formattedDate\n";
// });
// Route::get('/test-event', function () {
//     $data = [
//         'id_gci' => 'GCI2501160055',
//     ];
//     // Trigger event
//     dd(event(new \App\Events\BookingCreated($data)));
//     echo 'Event telah dijalankan';
// });
// Route::get('/test-whatsapp', function () {
//     dd("env : " . env('WHATSAPP_CHANNEL_ID'));
// });
// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/detail/{id_project}', [DashboardController::class, 'detail'])->name('detail');
Route::get('project/get_all_project', [ProjectController::class, 'get_all_project'])->name('project.get_all_project');
Route::get('project/{id_project}', [ProjectController::class, 'index'])->name('project');
Route::get('ulasan/{id_project}', [UlasanController::class, 'index'])->name('ulasan');
Route::get('fasilitas/{id_project}', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('fasilitas_sekitar/grouped/{id_project}', [FasilitasSekitarController::class, 'grouped'])->name('fasilitas.sekitar.grouped');
Route::get('fasilitas_sekitar/{id_project}/{category_id}', [FasilitasSekitarController::class, 'index'])->name('fasilitas.sekitar');
Route::get('blok_tersedia/{id_project}', [BlokTersediaController::class, 'index'])->name('blok');
Route::get('blok_tersedia_grouped/{id_project}', [BlokTersediaController::class, 'grouped'])->name('blok.grouped');
Route::post('chat/kategori', [ChatController::class, 'kategori'])->name('chat.kategori');
Route::post('chat/sub_kategori', [ChatController::class, 'sub_kategori'])->name('chat.sub_kategori');
Route::post('chat/jawaban', [ChatController::class, 'jawaban'])->name('chat.jawaban');
Route::get('get_csrf', function () {
    echo csrf_field();
});
Route::post('simpan_booking', [BookingController::class, 'simpan_booking'])->name('simpan_booking');


Route::get('/vt_view', [HomeController::class, 'vt_view'])->name('vt_view');
Route::get('/poi_view/{id_project}', [HomeController::class, 'poi_view']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/status_blok/{id_project}', [DashboardController::class, 'status_blok'])->name('status_blok');
Route::get('/search-kelurahan', [KelurahanController::class, 'searchKelurahan']);
Route::get('/search-sales', [SalesController::class, 'searchSales']);
Route::get('/search-referral', [ReferralController::class, 'searchReferral']);


// Route::get('/test', function () {
//     $booking = Booking::isAkad(70,'D22');
//     if(empty($booking)){
//         return response()->json([
//             'status' => false,
//             'message' => 'Blok Tidak Tersedia'
//         ]);
//     }

//     if(!isset($booking[0]->is_akad)){
//         return response()->json([
//             'status' => true,
//             'message' => 'Blok Tidak Tersedia'
//         ]); 
//     }
    
//     // dd($bookingk[0]->is_akad);
// });
