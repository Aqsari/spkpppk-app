<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home',['title'=> 'Home Page']);
});

Route::get('/alternatif', function () {
    return view('alternatif',['title'=> 'Alternatif']);
});

Route::get('/bobot', function () {
    return view('bobot', ['title'=> 'Bobot']);
});

Route::get('/perhitungan', function () {
    return view('perhitungan',['title'=> 'Perhitungan']);
});

Route::get('/hasil', function () {
    return view('hasil',['title'=> 'Hasil']);
});

Route::get('/login', function () {
    return view('login');
});
