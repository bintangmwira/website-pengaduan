<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('showlogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin.index');
    })->name('dashboard.admin');
    Route::resource('data-mahasiswa', DataMahasiswaController::class);
});

Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/beranda', function () {return view('dashboard.mahasiswa.index');})->name('dashboard.mahasiswa');
    Route::get('/laporan-mu', function () {return view('dashboard.mahasiswa.semuaLaporan');})->name('dashboard.mahasiswa.laporan-mu');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

