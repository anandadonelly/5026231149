<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
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

// import java.io;

// System.out.println("Hello World");

Route::get('/', function () { return view('welcome');});

Route::get('halo', function () {
	return " <h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

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

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
