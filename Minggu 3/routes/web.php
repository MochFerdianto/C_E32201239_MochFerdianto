<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', function () {
    return view('world');
});

Route::get('/routingsederhana', function () {
    echo'<h1>contoh routing sederhana</h1>';
    echo'saya sedang belajar menggunakan laravel dan membuat routings sederhana';
});

Route::get('halaman/{nomor}', function ($nomor) {
    return 'ini adalah halaman-'.$nomor;
});

Route::get('/image', function () {
    return view('gambar');
});
