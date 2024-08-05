<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Chatbot\ChatbotController;
use App\Http\Controllers\Detail_Maskapai\CitilinkController;
use App\Http\Controllers\Detail_Maskapai\GarudaController;
use App\Http\Controllers\Detail_Maskapai\LionAirController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SplashController;
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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get('/', [SplashController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authentication', [LoginController::class, 'authentication']);

Route::resource('/home', HomeController::class);
Route::get('/penerbangan', [HomeController::class, 'penerbangan']);
Route::get('/personal', [HomeController::class, 'personal']);


Route::resource('/kelas_citilink', CitilinkController::class);
Route::get('/kelas_reguler_citilink', [CitilinkController::class, 'kelas_reguler']);
Route::get('/kelas_vip_citilink', [CitilinkController::class, 'kelas_vip']);

Route::resource('/kelas_garuda', GarudaController::class);
Route::get('/kelas_reguler_garuda', [GarudaController::class, 'kelas_reguler']);
Route::get('/kelas_vip_garuda', [GarudaController::class, 'kelas_vip']);

Route::resource('/kelas_lion_air', LionAirController::class);
Route::get('/kelas_reguler_lion_air', [LionAirController::class, 'kelas_reguler']);
Route::get('/kelas_vip_lion_air', [LionAirController::class, 'kelas_vip']);

// Route::get('/chatbot', [ChatbotController::class, 'index']);
Route::post('chat', [ChatbotController::class, 'chat'])->name('chat');
Route::resource('/chatbot', ChatbotController::class);
