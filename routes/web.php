<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', function () {
    return view('pendaftaran');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/profil', function () {
    return view('profil');
})->name('profil.page');
Route::get('/detail-tahfidz', function () {
    return view('tahfidz');
 });
Route::get('/program', function () {
    return view('program_pesantren'); 
});
