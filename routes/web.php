<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\SewaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('beranda');
});
Route::get('/masuk', [MasukController::class, 'index']);
Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/pdaftar', [DaftarController::class, 'prosdaftar'])->name('pdaftar.prosdaftar');
Route::post('/pmasuk', [LoginController::class, 'prosmasuk'])->name('pmasuk.prosmasuk');
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/master/pengguna', [UserController::class, 'index']);
Route::get('/master/mobil',  [MobilController::class, 'index']);
Route::get('/master/addmobil',  [MobilController::class, 'tambah']);
Route::post('/psimpan', [MobilController::class, 'prosmobil'])->name('psimpan.prosmobil');
Route::get('/sewa', [SewaController::class, 'index']);
Route::get('/sewa/input', [SewaController::class, 'tambah']);
Route::post('/psimpantrx', [SewaController::class, 'prossewa'])->name('psimpantrx.prossewa');