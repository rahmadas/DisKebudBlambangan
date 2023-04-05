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
    return view('homes/home');
});

Route::get('/home', function () {
    return view('homes/home');
});

Route::get('/berita', function () {
    return view('beritas/berita');
});

Route::get('/pengurus', function () {
    return view('penguruss/pengurus');
});

Route::get('/refrensi', function () {
    return view('refrensis/refrensi');
});

Route::get('/kontak', function () {
    return view('kontaks/kontak');
});