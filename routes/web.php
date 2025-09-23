<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peminjamanController;


Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/reservasi', function () {
    return view('reservasi');
});
<<<<<<< HEAD
Route::get('/status', function () {
    return view('status');
});
Route::get('/lab', function () {
    return view('lab');
});
Route::get('/teknisi', function () {
    return view('teknisi');
});
=======
Route::get('/status', [peminjamanController::class, 'index'])->name('status.index');
Route::get('/detail/{id}/show', [peminjamanController::class, 'show'])->name('detail.show');
>>>>>>> b51c27a (update controller peminjaman)
