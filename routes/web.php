<?php

use Illuminate\Support\Facades\Route;
Route::get('/contact', function () {
    return view('contact');
});
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
Route::get('/kegiatan', function () {
    return view('kegiatan_santri'); 
});
Route::post('/proses-daftar', function () {
    return redirect()->back()->with('sukses', 'Selamat! Anda sudah terdaftar.');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/halaman-beranda', function () {
    return view('beranda'); 
});