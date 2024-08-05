<?php

use App\Models\Data;
use App\Models\Value;
use App\Models\Result;
use App\Models\Criteria;
use GuzzleHttp\Middleware;
use App\Models\ValueCriteria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValueControler;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\ComparisonController;

Route::get('/import-excel',[UserControllers::class,'import_excel']);
Route::post('/import-excel',[UserControllers::class,'import_excel_post']);

Route::get('/', function () {
    return view('login.index',['title'=> ' ']);
})->middleware('guest')->name('login');


Route::get('/home', function () {
    return view('home',['title'=> ' ']);
})->middleware('auth');


Route::get('/alternatif', function () {
    return view('alternatif',['title'=> 'Input Nilai Kriteria','datas'=> Data::all()]);
});
Route::get('/alternatif.input', ['title'=> 'Input Nilai Kriteria',AlternatifController::class, 'input']);
Route::post('/alternatif', ['title'=> 'Input Nilai Kriteria',AlternatifController::class, 'store']);

Route::delete('/datapeserta/{id}',[AlternatifController::class,'destroy']);
Route::get('/datapeserta/{id}/edit',[AlternatifController::class,'show'])->name('alternatif.edit');
Route::put('/alternatif/{id}/edit',[AlternatifController::class,'updates'])->name('alternatif.updates');
Route::post('alternatif.import',[AlternatifController::class,'import'])->name('alternatif.import');


Route::get('/bobot', function () {
    return view('bobot', ['title'=> 'Nilai Bobot','criterias'=> ValueCriteria::all()]);
})->middleware('auth');
Route::get('/bobot.input', ['title'=> 'Input Nilai Bobot',BobotController::class, 'input']);
Route::post('/bobot',  ['title'=> 'Input Nilai Bobot',BobotController::class, 'store'])->middleware('auth');


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


Route::get('/comparisons', [ComparisonController::class, 'index']);
Route::post('/comparisons', [ComparisonController::class, 'store']);