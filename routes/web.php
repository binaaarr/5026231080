<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KaryawanController;
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


Route::get('frontend', function () {
	return view('KumpulanTugas');
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
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

//Crud Obat
Route::get('obat', [ObatController::class, 'indexobat']);
Route::get('obat/tambah', [ObatController::class, 'tambahobat']);
Route::get('obat/store', [ObatController::class, 'store']);
Route::get('obat/edit/{id}', [ObatController::class, 'edit']);
Route::get('obat/update', [ObatController::class, 'update']);
Route::get('obat/hapus/{id}', [ObatController::class, 'hapus']);
Route::get('obat/cari', [ObatController::class, 'cari']);

//Crud Keranjang Belanja
Route::get('keranjang', [KeranjangController::class, 'indexkeranjang']);
Route::get('keranjang/tambah', [KeranjangController::class, 'tambahbarang']);
Route::get('keranjang/store', [KeranjangController::class, 'store']);
Route::get('keranjang/hapus/{id}', [KeranjangController::class, 'hapus']);

// Route karyawan
Route::get('/karyawan', [KaryawanController::class, 'indexkaryawan']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
