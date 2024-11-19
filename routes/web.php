<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ADMINISTRATOR
Route::get('/login', [AutentikasiController::class, 'index'])->name('login');
Route::post('/auth', [AutentikasiController::class, 'store'])->name('auth');
Route::get('/logout', [AutentikasiController::class, 'logoutPage'])->name('logout');

// Karyawan
Route::get('/', [AutentikasiController::class, 'uindex'])->name('login');
Route::post('/auten', [AutentikasiController::class, 'ustore'])->name('auten');

Route::group(['middleware' => 'login'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/verifikasi/{id}', [AdminController::class, 'verifikasiLaporan'])->name('verifikasi');
    Route::post('/progress/{id}', [AdminController::class, 'gantiProgress'])->name('progress');
    Route::get('/cetak', [AdminController::class, 'cetakLaporan'])->name('cetak');
    Route::get('/end_session', [AutentikasiController::class, 'logout'])->name('end_session');
    Route::get('/laporan/export', [AdminController::class, 'export']);
    Route::get('/upload', [AdminController::class, 'uploadInterface']);
    Route::post('/upload', [AdminController::class, 'uploadFile']);
    
});

Route::group(['middleware' => 'ulogin'], function () {
    Route::resource('/laporan', LaporanController::class);
    Route::get('/end', [AutentikasiController::class, 'ulogout'])->name('end');
    Route::get('/laporan/{id}', [LaporanController::class, 'jumlah']);
    Route::get('/tabel/{id}', [LaporanController::class, 'tabel'])->name('Tabel Laporan');
});

// Route::get('/', [LaporanController::class, 'index'])->name('Home');

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/coba', function () {
    return view('frontend.contoh');
});