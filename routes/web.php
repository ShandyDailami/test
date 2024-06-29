<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengajuanController;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user.login');
})->name('login');
Route::get('daftar', [MahasiswaController::class, 'daftar'])->name('daftar');
Route::post('daftar', [MahasiswaController::class, 'daftar_aksi'])->name('daftar.aksi');
Route::get('login', [MahasiswaController::class, 'login'])->name('login');
Route::post('login', [MahasiswaController::class, 'login_aksi'])->name('login.aksi');
Route::get('logout', [MahasiswaController::class, 'logout'])->name('logout');
Route::get('/e-service/rekomendasi', [PengajuanController::class, 'show'])->name('e-service/rekomendasi');
Route::get('/e-service/rekomendasi/pengajuan', [PengajuanController::class, 'showMahasiswa'])->name('e-service/rekomendasi/pengajuan');
Route::post('/e-service/rekomendasi/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/e-service', function () {
    return view('e-service');
})->name('e-service');