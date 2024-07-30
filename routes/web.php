<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/alternatif', function () {
    return view('alternatif');
});

Route::get('/bobot', function () {
    return view('bobot');
});

Route::get('/perhitungan', function () {
    return view('perhitungan');
});

Route::get('/hasil', function () {
    return view('hasil');
});

Route::get('/login', function () {
    return view('login');
});
