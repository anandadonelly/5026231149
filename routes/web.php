<?php

use App\Http\Controllers\CountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\KaryawanController;

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

// import java.io;

// System.out.println("Hello World");

Route::get('/', function () { return view('welcome');});

Route::get('halo', function () {
	return " <h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('first', function () {
	return view('tutor1');
});

Route::get('css_1', function () {
	return view('Tutorial');
});

Route::get('css_2', function () {
	return view('colorchange');
});

Route::get('bootstrap', function () {
	return view('Template');
});

Route::get('soal', function () {
	return view('Soal6');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('javascript', function () {
	return view('latihanjs1');
});

Route::get('danantara', function () {
	return view('danantara');
});

Route::get('nintendo', function () {
	return view('index');
});

Route::get('portofolio', function () {
	return view('frontend');
});

Route::get('dosen', [DosenController::class, 'index']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);


Route::get('/processor', [ProcessorController::class, 'index']);
Route::get('/processor/tambah', [ProcessorController::class, 'tambah']);
Route::post('/processor/store', [ProcessorController::class, 'store']);
Route::get('/processor/edit/{id}', [ProcessorController::class, 'edit']);
Route::post('/processor/update', [ProcessorController::class, 'update']);
Route::get('/processor/hapus/{id}', [ProcessorController::class, 'hapus']);

// ROUTE BARU UNTUK TUGAS KARYAWAN
// Route untuk menampilkan halaman utama karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);

// Route untuk menampilkan form tambah data
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);

// Route untuk menyimpan data baru dari form
Route::post('/karyawan/store', [KaryawanController::class, 'store']);

// Route untuk menghapus data karyawan
Route::get('/karyawan/hapus/{kodepegawai}', [KaryawanController::class, 'hapus']);

Route::get('/counter', [CountController::class, 'index']);
