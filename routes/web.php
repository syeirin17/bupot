<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PPController;
use App\Http\Controllers\PengController;


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

Route::get('authkey', [AuthController::class, 'authkey']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('pengaturan', [PengController::class, 'pengaturan']); 
Route::post('proses_tambah_pengaturan', [PengController::class, 'proses_tambah_pengaturan']); 
Route::get('ganti_status_peng/{id}', [PengController::class, 'ganti_status_peng']); 

Route::get('pajakpenghasilan', [PPController::class, 'pajakpenghasilan']); 
Route::get('daftarbuktisetorsendiri', [PPController::class, 'daftarbuktisetorsendiri']);
Route::get('rekampphsendiri', [PPController::class, 'rekampphsendiri']); 
Route::post('proses_tambah_pphsendiri', [PPController::class, 'proses_tambah_pphsendiri']);
Route::get('hapus_pphsendiri/{id}', [PPController::class, 'hapus_pphsendiri']); 

Route::get('daftarbuktipotongBPPs', [PPController::class, 'daftarbuktipotongBPPs']); 
Route::get('rekambp1', [PPController::class, 'daftardokumen']); 
Route::post('proses_tambah_pphpasal', [PPController::class, 'proses_tambah_pphpasal']); 
Route::get('hapus_dokumen/{id}', [PPController::class, 'hapus_dokumenpph']); 
Route::get('hapus_pphpasal/{id}', [PPController::class, 'hapus_pphpasal']); 

Route::get('daftarbupotnon', [PPController::class, 'daftarbupotnon']); 
Route::get('rekambupotnon', [PPController::class, 'rekambupotnon']); 
Route::post('proses_tambah_pphnon', [PPController::class, 'proses_tambah_pphnon']);
Route::get('hapus_dokumennon/{id}', [PPController::class, 'hapus_dokumennon']); 
Route::get('hapus_pphnon/{id}', [PPController::class, 'hapus_pphnon']); 

Route::get('impordata', [PPController::class, 'impordata']); 

Route::get('posting', [PPController::class, 'posting']); 

Route::get('sptmasa', [SPTController::class, 'sptmasa']);
Route::get('rekambuktisetor', [SPTController::class, 'tambah']); 
Route::get('daftarbuktisetor', [SPTController::class, 'sptmasa']); 
Route::post('proses_tambah_buktisetor', [SPTController::class, 'proses_tambah_buktisetor']);
Route::get('hapus_buktisetor/{id}', [SPTController::class, 'hapus_buktisetor']); 

Route::get('penyiapanspt', [SPTController::class, 'penyiapanspt']);

Route::get('suratbupotpasal', [PPController::class, 'suratbupotpasal']); 
Route::get('suratbupotsendiri', [PPController::class, 'suratbupotsendiri']); 
Route::get('download_folder', [PPController::class, 'getDownload']); 



Route::get('/sptmasa', function () {
    return view('sptmasa');
});
Route::get('/penyiapanspt', function () {
    return view('penyiapanspt');
});
Route::get('/draft2', function () {
    return view('draft2');
});
Route::get('/kirimspt', function () {
    return view('kirimspt');
});
Route::get('/dopp', function () {
    return view('dopp');
});
Route::get('/dbp1', function () {
    return view('dbp1');
});
Route::get('/dbp', function () {
    return view('dbp');
});
Route::get('/indukspt', function () {
    return view('indukspt');
});
Route::get('/uploadspt', function () {
    return view('uploadspt');
});
Route::get('/tambah', function () {
    return view('tambah');
});
Route::get('/suratbilling', function () {
    return view('suratbilling');
});