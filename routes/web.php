<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SiswaController;



Route::resource('tasks', TaskController::class);
Route::get('/', function () {
    return view('welcome');
});



Route::get("/biodata", [App\Http\Controllers\biodatacontroller::class, 'biodata']);
Route::get("/biodata/{nama}", [App\Http\Controllers\biodatacontroller::class, 'getNama']);
Route::get("/itclub", [App\Http\Controllers\itclubcontroller::class, 'itclub']);
Route::get("/itclub/{jurusan}", [App\Http\Controllers\itclubcontroller::class, 'getNama']);
Route::get("/dashboard", [App\Http\Controllers\maincontroller::class, 'dashboard']);
Route::post("/barang/add", [BarangController::class, 'store']);
Route::get("/barang/add", [BarangController::class, 'store_view'])->name('barang.tambah');
Route::post("/barang", [BarangController::class, 'store'])->name('barang.kirim');
Route::get("/barang/update/{id}", [BarangController::class, 'update_view'])->name('barang.edit');
Route::put("/barang/{id}", [BarangController::class, 'update'])->name('barang.update');
Route::get("/barang/{id}", [BarangController::class, 'destroy'])->name('barang.delete');
Route::get("/barang", [BarangController::class, 'index']);
Route::get("/siswa/add", [SiswaController::class, 'store_view'])->name('siswa.tambah');
Route::post("/siswa/add", [SiswaController::class, 'store']);
Route::get("/siswa/update/{id}", [SiswaController::class, 'update_view'])->name('siswa.edit');
Route::put("/siswa/{id}", [SiswaController::class, 'update'])->name('siswa.update');
Route::get("/siswa/{id}", [SiswaController::class, 'destroy'])->name('siswa.delete');
Route::get("/siswa", [SiswaController::class, 'index']);
Route::resource('siswa', SiswaController::class);
Route::get("/buku", [App\Http\Controllers\bukuController::class, 'index']);
Route::get("/buku/tambah", [App\Http\Controllers\bukuController::class, 'store_view'])->name('buku.tambah');
Route::post("/buku/tambah", [App\Http\Controllers\bukuController::class, 'store']);
Route::get("/buku/update/{id}", [App\Http\Controllers\bukuController::class, 'update_view'])->name('buku.edit');
Route::put("/buku/{id}", [App\Http\Controllers\bukuController::class, 'update'])->name('buku.update');
Route::get("/buku/{id}", [App\Http\Controllers\bukuController::class, 'destroy'])->name('buku.delete');
