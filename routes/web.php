<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peminjamanController;


Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/lab', function () {
    return view('lab');
});
Route::get('/reservasi', [peminjamanController::class, 'create'])->name('reservasi.create');
Route::post('/reservasi', [peminjamanController::class, 'store'])->name('reservasi.store');
Route::get('/status', [peminjamanController::class, 'index'])->name('status.index');
Route::get('/detail/{id}/show', [peminjamanController::class, 'show'])->name('detail.show');
