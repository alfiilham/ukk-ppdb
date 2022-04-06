<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth/login', [LoginController::class, 'login']);

Route::get('daftar', [RegistrasiController::class, 'showdaftar']);
Route::post('daftar-siswa', [RegistrasiController::class, 'daftar']);
Route::get('landing-page', [RegistrasiController::class, 'landingPage']);
Route::get('registrasi/pdf', [RegistrasiController::class, 'cetakPdfAll']);
Route::get('registrasi/pdf/{id}', [RegistrasiController::class, 'cetakPdfId']);
Route::resource('registrasi', RegistrasiController::class);
