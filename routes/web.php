<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/reservasi', function () {
    return view('reservasi');
});
Route::get('/status', function () {
    return view('status');
});
