<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KalkulatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\PPH21Controller;
use App\Http\Controllers\PPH22Controller;
use App\Http\Controllers\AsistensiController;
use App\Http\Controllers\PemadananController;
use App\Http\Controllers\EbilingController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleryController;

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

//Route::get('/', [LandingpageController::class, 'index']);
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/PPH21', [PPH21Controller::class, 'index'])->name('pph21');
Route::get('/PPH22', [PPH22Controller::class, 'index'])->name('pph22');
Route::get('/Kalkulator', [KalkulatorController::class, 'index'])->name('kalkulator');
Route::post('/item/store', [KalkulatorController::class, 'store'])->name('item-store');
Route::post('/item/{id}/destroy', [KalkulatorController::class, 'destroy'])->name('kalkulator-destroy');
Route::post('/item/trancate', [KalkulatorController::class, 'trancate'])->name('kalkulator-trancate');
Route::get('/cetakPDF', [KalkulatorController::class, 'cetakPDF'])->name('kalkulator-cetak');
Route::get('/asistensi', [AsistensiController::class, 'index'])->name('asistensi');
Route::get('/pemadanan', [PemadananController::class, 'index'])->name('pemadanan');
Route::get('/ebiling', [EbilingController::class, 'index'])->name('ebiling');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/galery', [GaleryController::class, 'index'])->name('galery');