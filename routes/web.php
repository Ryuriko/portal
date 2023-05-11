<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\KemahasiswaanController;
use App\Http\Controllers\KeuanganController;
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
Route::get('/akademik/detail/krs', [AkademikController::class, 'DetailKRS']);
Route::get('/akademik/detail/tambahKRS', [AkademikController::class, 'TambahKRS']);
Route::get('/akademik/ifm', [AkademikController::class, 'ifm']);
Route::get('/akademik/perkuliahan', [AkademikController::class, 'perkuliahan']);
Route::get('/akademik/khs', [AkademikController::class, 'khs']);
Route::get('/akademik/detail/khs', [AkademikController::class, 'DetailKHS']);
Route::get('/akademik/transkrip', [AkademikController::class, 'transkrip']);
Route::get('/akademik/detail/transkrip', [AkademikController::class, 'DetailTranskrip']);

// Route administrasi
Route::get('/administrasi', [AdministrasiController::class, 'PengajuanCuti']);
Route::get('/administrasi/wisuda', [AdministrasiController::class, 'wisuda']);
Route::get('/administrasi/magang', [AdministrasiController::class, 'magang']);
Route::get('/administrasi/PindahProdi', [AdministrasiController::class, 'PindahProdi']);
Route::get('/administrasi/KeluarUntirta', [AdministrasiController::class, 'KeluarUntirta']);
Route::get('/administrasi/perpustakaan', [AdministrasiController::class, 'perpustakaan']);
Route::get('/administrasi/perpustakaan/riwayat', [AdministrasiController::class, 'RiwayatPeminjaman']);

// Route kemahasiswaan
Route::get('/kemahasiswaan', [KemahasiswaanController::class, 'beasiswa']);
Route::get('/kemahasiswaan/kkm', [KemahasiswaanController::class, 'kkm']);
Route::get('/kemahasiswaan/kkm/dokumen', [KemahasiswaanController::class, 'dokumen']);
Route::get('/kemahasiswaan/kkm/kelompok', [KemahasiswaanController::class, 'kelompok']);
Route::get('/kemahasiswaan/prestasi', [KemahasiswaanController::class, 'prestasi']);
Route::get('/kemahasiswaan/simkatmawa', [KemahasiswaanController::class, 'simkatmawa']);

// Route keuangan
Route::get('/keuangan', [KeuanganController::class, 'ukt']);
Route::get('/keuangan/cuti', [KeuanganController::class, 'cuti']);
Route::get('/keuangan/penangguhan', [KeuanganController::class, 'penangguhan']);
Route::get('/keuangan/penurunan', [KeuanganController::class, 'penurunan']);

// Route SKPI
Route::get('/skpi', [KeuanganController::class, 'skpi']);