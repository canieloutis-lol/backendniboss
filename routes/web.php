<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;



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
