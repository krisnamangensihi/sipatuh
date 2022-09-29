<?php

use Modules\Lingkungan\Http\Controllers\P1aController;
use Modules\Lingkungan\Http\Controllers\P1bController;
use Modules\Lingkungan\Http\Controllers\P2aController;
use Modules\Lingkungan\Http\Controllers\P2bController;
use Modules\Lingkungan\Http\Controllers\P2cController;
use Modules\Lingkungan\Http\Controllers\P2dController;
use Modules\Lingkungan\Http\Controllers\P3aController;
use Modules\Lingkungan\Http\Controllers\P3bController;
use Modules\Lingkungan\Http\Controllers\P4aController;
use Modules\Lingkungan\Http\Controllers\P5aController;
use Modules\Lingkungan\Http\Controllers\P5bController;
use Modules\Lingkungan\Http\Controllers\P5cController;
use Modules\Lingkungan\Http\Controllers\P6aController;
use Modules\Lingkungan\Http\Controllers\P7aController;
use Modules\Lingkungan\Http\Controllers\P7bController;
use Modules\Lingkungan\Http\Controllers\P7cController;
use Modules\Lingkungan\Http\Controllers\P8aController;
use Modules\Lingkungan\Http\Controllers\P9aController;
use Modules\Lingkungan\Http\Controllers\Point1aController;
use Modules\Lingkungan\Http\Controllers\Point2aController;
use Modules\Lingkungan\Http\Controllers\Point3aController;
use Modules\Lingkungan\Http\Controllers\Point4aController;
use Modules\Lingkungan\Http\Controllers\Point6aController;
use Modules\Lingkungan\Http\Controllers\Point7aController;
use Modules\Lingkungan\Http\Controllers\Point8aController;
use Modules\Lingkungan\Http\Controllers\Point9aController;
use Modules\Lingkungan\Http\Controllers\SaprofileController;
use Modules\Lingkungan\Http\Controllers\LingkunganController;
use Modules\Lingkungan\Http\Controllers\DatalingkunganController;

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

// Route::prefix('lingkungan')->group(function() {
//     Route::get('/', 'LingkunganController@index');
//     Route::resource('/form', FormController::class);
// });

Route::prefix('Lingkungan')->middleware('auth')->group(function() {
    Route::get('/', 'LingkunganController@index');
    Route::resource('/index', LingkunganController::class);
    Route::resource('/point1a', Point1aController::class);
    Route::resource('/point2a', Point2aController::class);
    Route::resource('/point3a', Point3aController::class);
    Route::resource('/point4a', Point4aController::class);
    Route::resource('/point5a', Point5aController::class);
    Route::resource('/point6a', Point6aController::class);
    Route::resource('/point7a', Point7aController::class);
    Route::resource('/point8a', Point8aController::class);
    Route::resource('/point9a', Point9aController::class);
    Route::resource('/datalingkungan', DatalingkunganController::class);
    Route::resource('/saprofile', SaprofileController::class);
    Route::resource('/p1a', P1aController::class);
    Route::resource('/p1b', P1bController::class);
    Route::resource('/p2a', P2aController::class);
    Route::resource('/p2b', P2bController::class);
    Route::resource('/p2c', P2cController::class);
    Route::resource('/p2d', P2dController::class);
    Route::resource('/p3a', P3aController::class);
    Route::resource('/p3b', P3bController::class);
    Route::resource('/p4a', P4aController::class);
    Route::resource('/p5a', P5aController::class);
    Route::resource('/p5b', P5bController::class);
    Route::resource('/p5c', P5cController::class);
    Route::resource('/p5d', P5dController::class);
    Route::resource('/p5e', P5eController::class);
    Route::resource('/p6a', P6aController::class);
    Route::resource('/p7a', P7aController::class);
    Route::resource('/p7b', P7bController::class);
    Route::resource('/p7c', P7cController::class);
    Route::resource('/p8a', P8aController::class);
    Route::resource('/p9a', P9aController::class);
});
