<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;




Route::resource('tasks', TaskController::class);
Route::get('/', function () {
    return view('welcome');
});


Route::get("/biodata", [App\Http\Controllers\biodatacontroller::class, 'biodata']);
Route::get("/biodata/{nama}", [App\Http\Controllers\biodatacontroller::class, 'getNama']);
Route::get("/itclub", [App\Http\Controllers\itclubcontroller::class, 'itclub']);
Route::get("/itclub/{jurusan}", [App\Http\Controllers\itclubcontroller::class, 'getNama']);
Route::get("/dashboard", [App\Http\Controllers\maincontroller::class, 'dashboard']);
