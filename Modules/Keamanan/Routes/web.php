<?php

use Modules\Keamanan\Http\Controllers\FormController;
use Modules\Keamanan\Http\Controllers\LaporController;
use Modules\Keamanan\Http\Controllers\SosialController;
use Modules\Keamanan\Http\Controllers\FormulirController;
use Modules\Keamanan\Http\Controllers\KeamananController;
use Modules\Keamanan\Http\Controllers\KerawananController;
use Modules\Keamanan\Http\Controllers\PelatihanController;
use Modules\Keamanan\Http\Controllers\MangensihiController;
use Modules\Keamanan\Http\Controllers\PengamananController;
use Modules\Keamanan\Http\Controllers\DatakeamananController;
use Modules\Keamanan\Http\Controllers\KepemimpinanController;


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

Route::prefix('Keamanan')->middleware('auth')->group(function() {
    Route::get('/', 'KeamananController@index'); 
    Route::resource('/index', KeamananController::class);
    Route::resource('/form', FormController::class);
    Route::resource('/datakeamanan', DatakeamananController::class);
    Route::resource('/kepemimpinan', KepemimpinanController::class);
    Route::resource('/sosial', SosialController::class);
    Route::resource('/pengamanan', PengamananController::class);
    Route::resource('/kerawanan', KerawananController::class);
    Route::resource('/pelatihan', PelatihanController::class);
    Route::resource('/manager', ManagerController::class);
    Route::resource('/lapor', LaporController::class);
    Route::get('/mangensihi', [MangensihiController::class, 'index'])->name('mangensihi');
    Route::get('/formulir', [FormulirController::class, 'index'])->name('formulir');
    Route::get('/triwulan1', [DatakeamananController::class,'tw1']);
    Route::get('/triwulan2', [DatakeamananController::class,'tw2']);
    Route::get('/triwulan3', [DatakeamananController::class,'tw3']);
    Route::get('/triwulan4', [DatakeamananController::class,'tw4']);

});
