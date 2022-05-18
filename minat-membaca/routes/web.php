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

Route::get('/beranda', function () {
    return view('beranda', [
        "title" => "Beranda"
    ]);
});

Route::get('/perhitungan', function () {
    return view('perhitungan', [
        "title" => "Perhitungan"
    ]);
});

Route::get('/hasil', function () {
    return view('hasil', [
        "title" => "Hasil"
    ]);
});
