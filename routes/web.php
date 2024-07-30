<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('import-excel',[UserController::class,'import_excel']);

Route::get('/', function () {
    return view('home',['title'=> ' ']);
});

Route::get('/home', function () {
    return view('home',['title'=> ' ']);
});

Route::get('/alternatif', function () {
    return view('alternatif',['title'=> 'Input Nilai Kriteria', 'pilihan'=>[
       [ 'kriteria1' => 'xxx',
       'kriteria2' => 'xxx',
       'kriteria3' => 'xxx',
       'kriteria4' => 'xxx'],
       [ 'kriteria1' => 'xxx',
       'kriteria2' => 'xxx',
       'kriteria3' => 'xxx',
       'kriteria4' => 'xxx'],
       [ 'kriteria1' => 'xxx',
       'kriteria2' => 'xxx',
       'kriteria3' => 'xxx',
       'kriteria4' => 'xxx'],
       [ 'kriteria1' => 'xxx',
       'kriteria2' => 'xxx',
       'kriteria3' => 'xxx',
       'kriteria4' => 'xxx'],
       [ 'kriteria1' => 'xxx',
       'kriteria2' => 'xxx',
       'kriteria3' => 'xxx',
       'kriteria4' => 'xxx']
    ]]);
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
