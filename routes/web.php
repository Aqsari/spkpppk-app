<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\ValueControler;
use App\Models\Data;
use App\Models\Value;
use App\Models\Criteria;
use App\Models\Result;

Route::get('/import-excel',[UserControllers::class,'import_excel']);
Route::post('/import-excel',[UserControllers::class,'import_excel_post']);

Route::get('/', function () {
    return view('home',['title'=> ' ']);
});

Route::get('/home', function () {
    return view('home',['title'=> ' ']);
});


Route::get('/alternatif', function () {
    return view('alternatif',['title'=> 'Input Nilai Kriteria', 'datas'=> Data::all()]);
});

Route::get('/datapeserta/{id}', function (Data $data) {

    return view('datapeserta',[
        'title'=>'Data Peserta',
        'data'=> $data, 
        'status'=>['name'=>'asa','h']]);
});

Route::get('/bobot', function () {
    return view('bobot', ['title'=> 'Input Nilai Bobot','criterias'=> Criteria::all()]);
});

Route::get('/perhitungan', function () {
    return view('perhitungan',['title'=> 'Perhitungan dengan Metode AHP']);
});

Route::get('/hasil', function () {
    return view('hasil',['title'=> 'Hasil Ranking Calon PPPK Kementrian Agama Tanah Datar','results'=> Result::all(), 'values'=> Value::all()]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'check']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
