<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BayarController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('dashboard',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('regis',[HomeController::class,'regis'])->name('regis');
Route::get('masuk',[HomeController::class,'masuk'])->name('masuk');

// untuk halaman tampilan laporan
Route::get('laporan',[BayarController::class,'laporan_bayar'])->name('laporan');
// untuk tambah pengguna
Route::get('daftar_anggota',[HomeController::class,'daftar_anggota'])->name('daftar_anggota');
// ini route untuk daftarkan pengguna baru
Route::post('tambah_pengguna',[PenggunaController::class,'tambah_pengguna'])->name('tambah_pengguna');

// ini untuk menampikan halaman pengguna
// Route::get('halaman_pengguna',[HomeController::class,'halaman_pengguna'])->name('halaman_pengguna');
// ini data halaman pengguna
Route::get('pengguna', [PenggunaController::class, 'LihatPengguna'])->name('pengguna');
// ini untuk mencari data pengguna menggunakan nama alamat atau pun rt nya
// Route::get('cari_pengguna', [PenggunaController::class, 'cari_pengguna'])->name('cari_pengguna');
Route::get('/pencarian', [PenggunaController::class, 'cari_pengguna']);

// tangani untuk mengedit dan hapus data pengguna PLTA
Route::get('/edit_pengguna/{id}/edit', [PenggunaController::class, 'edit_pengguna'])->name('edit_pengguna');
Route::put('/up_pengguna/{id}', [PenggunaController::class, 'update_pengguna'])->name('up_pengguna');
Route::delete('/delete_pengguna/{id}', [PenggunaController::class, 'hapus_pengguna'])->name('delete_pengguna');

// delet laporan
Route::get('/delete_laporan/{id}', [BayarController::class, 'hapus_laporan'])->name('delete_laporan');

// ini untuk tangani pembayaran
Route::get('/bayar', [BayarController::class, 'TampilanData'])->name('bayar');
Route::post('/input_bayar', [BayarController::class, 'input_bayar'])->name('input_bayar');
// Route::get('hitung_jumlah', [BayarController::class, 'hitung_jumlah'])->name('bayar.hitung_jumlah');

// Route::get('/calculate', [BayarController::class, 'calculate'])->name('calculate');

// ini router untuk input data admin
Route::post('input', [DaftarController::class,'input'])->name('input');

// ini router untuk login admin
Route::post('/login', [MasukController::class, 'login'])->name('login');
route::get('/register',[MasukController::class,'MariLogin'])->name('/register');
route::post('/register',[MasukController::class,'input'])->name('/register.input');

// Route untuk logout
Route::get('/logout', [MasukController::class, 'logout'])->name('logout');

