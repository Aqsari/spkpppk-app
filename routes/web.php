<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=> '']);
});

Route::get('/home', function () {
    return view('home',['title'=> '']);
});

Route::get('/alternatif', function () {
    return view('alternatif',['title'=> 'Input Nilai Kriteria']);
});

Route::get('/bobot', function () {
    return view('bobot', ['title'=> 'Input Nilai Bobot']);
});

Route::get('/perhitungan', function () {
    return view('perhitungan',['title'=> 'Perhitungan dengan Metode AHP']);
});

Route::get('/hasil', function () {
    return view('hasil',['title'=> 'Hasil Ranking Calon PPPK Kementrian Agama Tanah Datar']);
});

Route::get('/login', function () {
    return view('login');
});
