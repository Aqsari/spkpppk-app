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
use GuzzleHttp\Middleware;

Route::get('/import-excel',[UserControllers::class,'import_excel']);
Route::post('/import-excel',[UserControllers::class,'import_excel_post']);

Route::get('/', function () {
    return view('login.index',['title'=> ' ']);
})->middleware('guest')->name('login');


Route::get('/home', function () {
    return view('home',['title'=> ' ']);
})->middleware('auth');


Route::get('/alternatif', function () {
    return view('alternatif',['title'=> 'Input Nilai Kriteria', 'datas'=> Data::all()]);
});

Route::get('/datapeserta/{id}', function (Data $data) {

    return view('datapeserta',[
        'title'=>'Data Peserta',
        'data'=> $data, 
        'status'=>['name'=>'asa','h']]);
})->middleware('auth');

Route::get('/bobot', function () {
    return view('bobot', ['title'=> 'Input Nilai Bobot','criterias'=> Criteria::all()]);
})->middleware('auth');

Route::get('/perhitungan', function () {
    return view('perhitungan',['title'=> 'Perhitungan dengan Metode AHP']);
})->middleware('auth');

Route::get('/hasil', function () {
    return view('hasil',['title'=> 'Hasil Ranking Calon PPPK Kementrian Agama Tanah Datar','results'=> Result::all(), 'values'=> Value::all()]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'autenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
