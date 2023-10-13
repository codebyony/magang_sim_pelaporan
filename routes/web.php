<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentikasiController;

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
Route::post('/store', [AutentikasiController::class, 'store'])->name('store');
Route::get('/logout', [AutentikasiController::class, 'logoutPage'])->name('logout');

Route::group(['middleware' => 'login'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::put('/verifikasi/{id}', [AdminController::class, 'verifikasiLaporan'])->name('verifikasi');
    Route::get('/cetak', [AdminController::class, 'cetakLaporan'])->name('cetak');
    Route::get('/end_session', [AutentikasiController::class, 'logout'])->name('end_session');
});

Route::get('/', function () {
    return view('frontend.page-starter');
});