<?php

use Modules\K3\Http\Controllers\K3Controller;
use Modules\K3\Http\Controllers\FormController;
use Modules\K3\Http\Controllers\RkapController;
use Modules\K3\Http\Controllers\AuditController;
use Modules\K3\Http\Controllers\SafetyController;
use Modules\K3\Http\Controllers\UploadController;
use Modules\K3\Http\Controllers\Rekapk3Controller;
use Modules\K3\Http\Controllers\PenerapanController;
use Modules\K3\Http\Controllers\ReportingController;
use Modules\K3\Http\Controllers\AudittableController;
use Modules\K3\Http\Controllers\LeadershipController;
use Modules\K3\Http\Controllers\SafetitableController;
use Modules\K3\Http\Controllers\ComunicationController;
use Modules\K3\Http\Controllers\LeadershipformController;
use Modules\K3\Http\Controllers\PenerapantableController;
use Modules\K3\Http\Controllers\ReportingtableController;
use Modules\K3\Http\Controllers\LeadershiptableController;
use Modules\K3\Http\Controllers\ComunicationtableController;
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

Route::prefix('K3')->middleware('auth')->group(function() {
    Route::get('/', 'K3Controller@index'); 
    Route::post('/proses', 'FormController@store');
    Route::resource('/index', K3Controller::class);
    Route::resource('/rkap', RkapController::class);
    Route::get('/rkaptw1', [RkapController::class,'tw1']);
    Route::get('/rkaptw2', [RkapController::class,'tw2']);
    Route::get('/rkaptw3', [RkapController::class,'tw3']);
    Route::get('/rkaptw4', [RkapController::class,'tw4']);
    Route::resource('/form', FormController::class,);
    Route::resource('/leadership', LeadershipController::class,);
    Route::get('/leadershiptw1', [LeadershipController::class,'tw1']);
    Route::get('/leadershiptw2', [LeadershipController::class,'tw2']);
    Route::get('/leadershiptw3', [LeadershipController::class,'tw3']);
    Route::get('/leadershiptw4', [LeadershipController::class,'tw4']);
    Route::resource('/audit', AuditController::class,);
    Route::get('/audittw1', [AuditController::class,'tw1']);
    Route::get('/audittw2', [AuditController::class,'tw2']);
    Route::get('/audittw3', [AuditController::class,'tw3']);
    Route::get('/audittw4', [AuditController::class,'tw4']);
    Route::resource('/audittable', AudittableController::class,);
    Route::resource('/penerapan', PenerapanController::class,);
    Route::resource('/penerapantable', PenerapantableController::class,);
    Route::resource('/safeti', SafetyController::class,);
    Route::resource('/safetitable', SafetitableController::class,);
    Route::resource('/comunication', ComunicationController::class,);
    Route::resource('/comunicationtable', ComunicationtableController::class,);
    Route::resource('/reporting', ReportingController::class,);
    Route::resource('/reportingtable', ReportingtableController::class,);
    Route::resource('/rekapk3', Rekapk3Controller::class,);
});