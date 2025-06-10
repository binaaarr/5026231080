<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ObatController;
use Illuminate\Support\Facades\Log;

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
    return view('welcome');
});


Route::get('KumpulanTugas', function () {
	return view('frontend');
});


Route::get('Tugas1', function () {
	return view('pertama');
});

Route::get('Tugas2', function () {
	return view('Pagination');
});

Route::get('Tugas3', function () {
	return view('Layout 19 March');
});

Route::get('Tugas4', function () {
	return view('js1');
});

Route::get('Tugas5', function () {
	return view('js2');
});

Route::get('Tugas6', function () {
	return view('KucingdanSup');
});

Route::get('ETS', function () {
	return redirect()->away('https://binaaarr.github.io/');
});


Route::get('dosen', [Link::class, 'index']);

// Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);

//Route Blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//Crud Pegawai
Route::get('pegawai', [PegawaiController::class, 'index']);
Route::get('pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('pegawai/store', [PegawaiController::class, 'store']);
Route::get('pegawai/edit', [PegawaiController::class, 'edit']);
Route::get('pegawai/update', [PegawaiController::class, 'update']);
Route::get('pegawai/hapus', [PegawaiController::class, 'hapus']);
Route::get('pegawai/cari', [PegawaiController::class, 'cari']);

//Crud Obat
Route::get('obat', [ObatController::class, 'indexobat']);
Route::get('obat/tambah', [ObatController::class, 'tambahobat']);
Route::get('obat/store', [ObatController::class, 'store']);
Route::get('obat/edit', [ObatController::class, 'edit']);
Route::get('obat/update', [ObatController::class, 'update']);
Route::get('obat/hapus', [ObatController::class, 'hapus']);
Route::get('obat/cari', [ObatController::class, 'cari']);

