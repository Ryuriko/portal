<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;

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

// Route authentication
Route::get('/login', [UserRegistrationController::class, 'login']);

// Route profile
Route::get('/', [Controller::class, 'pendidikan']);
Route::get('/profile', [ProfileController::class, 'biodata']);
Route::get('/profile/keluarga', [ProfileController::class, 'keluarga']);
Route::get('/profile/pendidikan', [ProfileController::class, 'pendidikan']);
Route::get('/profile/dokumen', [ProfileController::class, 'dokumen']);

// Route akademik
Route::get('/akademik', [AkademikController::class, 'krs']);
Route::get('/akademik/ifm', [AkademikController::class, 'ifm']);
Route::get('/akademik/perkuliahan', [AkademikController::class, 'perkuliahan']);
Route::get('/akademik/khs', [AkademikController::class, 'khs']);
Route::get('/akademik/transkrip', [AkademikController::class, 'transkrip']);
