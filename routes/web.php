<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/divisi',[DivisiController::class,'index'])->name('divisi.index');
Route::get('/divisi/tambah',[DivisiController::class,'create'])->name('divisi.create');
Route::post('/divisi',[DivisiController::class,'store'])->name('divisi.store');
Route::get('/divisi/{divisi}',[DivisiController::class,'edit'])->name('divisi.edit');
Route::put('/divisi/{divisi}',[DivisiController::class,'update'])->name('divisi.update');
Route::delete('/divisi/{divisi}',[DivisiController::class,'delete'])->name('divisi.delete');


// Register
// 1. Menampilkan Halaman Register
Route::get('/register',[AuthController::class,'register'])->name('register');

// 2.Proses Register
Route::post('/register',[AuthController::class,'prosesregister'])->name('proses.register');

// Login
// 3. Menampilkan Halaman Login
Route::get('/login',[AuthController::class,'login'])->name('login');

// 4. Proses Login
Route::post('/login',[AuthController::class,'proseslogin'])->name('proses.login');

// logout
// 5. Proses Logout
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


// ROUTE PEGAWAI
// 1.READ -> MENAMPILKAN DATA PEGAWAI
Route::get('/pegawai',[PegawaiController::class,'index'])->name('pegawai.index');

// 2.CREATE -> MENAMPILKAN HALAMAN TAMBAH PEGAWAI
Route::get('/pegawai/create',[PegawaiController::class,'create'])->name('pegawai.create');

// 3.CREATE -> PROSES UNTUK MENAMBAH DATA PEGAWAI
Route::post('/pegawai',[PegawaiController::class,'store'])->name('pegawai.store');

// 4.UPDATE -> MENAMPILKAN HALAMAN EDIT PEGAWAI
Route::get('/pegawai/edit/{pegawai}',[PegawaiController::class,'edit'])->name('pegawai.edit');

// 5.UPDATE -> PROSES UPDATE DATA PEGAWAI
Route::put('/pegawai/{pegawai}',[PegawaiController::class,'update'])->name('pegawai.update');

// 6.DELETE -> PROSES HAPUS DATA
Route::delete('/pegawai/{pegawai}',[PegawaiController::class,'delete'])->name('pegawai.delete');
