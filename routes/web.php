<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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
Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//Route Blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
