<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdlingController;
use App\Http\Controllers\Admink3Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CetakbgrController;
use App\Http\Controllers\Safetik3Controller;
use Modules\K3\Http\Controllers\K3Controller;
use App\Http\Controllers\DaftarakunController;
use App\Http\Controllers\KikeamananController;
use App\Http\Controllers\RekapbogorController;
use App\Http\Controllers\cetak\CetakController;
use App\Http\Controllers\Penerapank3Controller;
use App\Http\Controllers\RekappadangController;
use App\Http\Controllers\Reportingk3Controller;
use App\Http\Controllers\RekapjakartaController;
use App\Http\Controllers\RekapmakasarController;
use App\Http\Controllers\RekappandaanController;
use App\Http\Controllers\AdminkeamananController;
use App\Http\Controllers\AuditdiajukanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BogorkeamananController;
use App\Http\Controllers\LaporkeamananController;
use App\Http\Controllers\RekapsemarangController;
use App\Http\Controllers\RekapsuralayaController;
use App\Http\Controllers\Comunicationk3Controller;
use App\Http\Controllers\divisi\Bogork3Controller;
use App\Http\Controllers\PadangkeamananController;
use App\Http\Controllers\RekappalembangController;
use App\Http\Controllers\RekaptuntunganController;
use App\Http\Controllers\SosialkeamananController;
use App\Http\Controllers\divisi\Padangk3Controller;
use App\Http\Controllers\JakartakeamananController;
use App\Http\Controllers\Kantor\Kantor1bController;
use App\Http\Controllers\Kantor\Kantor2aController;
use App\Http\Controllers\Kantor\Kantor2bController;
use App\Http\Controllers\Kantor\Kantor2cController;
use App\Http\Controllers\Kantor\Kantor2dController;
use App\Http\Controllers\Kantor\Kantor3aController;
use App\Http\Controllers\Kantor\Kantor3bController;
use App\Http\Controllers\Kantor\Kantor4aController;
use App\Http\Controllers\Kantor\Kantor5aController;
use App\Http\Controllers\Kantor\Kantor5bController;
use App\Http\Controllers\Kantor\Kantor5cController;
use App\Http\Controllers\Kantor\Kantor5dController;
use App\Http\Controllers\Kantor\Kantor5eController;
use App\Http\Controllers\Kantor\Kantor6aController;
use App\Http\Controllers\Kantor\Kantor7aController;
use App\Http\Controllers\Kantor\Kantor8aController;
use App\Http\Controllers\Kantor\Kantor9aController;
use App\Http\Controllers\MakasarkeamananController;
use App\Http\Controllers\ManagerkeamananController;
use App\Http\Controllers\Padang\Padang1aController;
use App\Http\Controllers\Padang\Padang1bController;
use App\Http\Controllers\Padang\Padang2aController;
use App\Http\Controllers\Padang\Padang2bController;
use App\Http\Controllers\Padang\Padang2cController;
use App\Http\Controllers\Padang\Padang2dController;
use App\Http\Controllers\Padang\Padang3aController;
use App\Http\Controllers\Padang\Padang3bController;
use App\Http\Controllers\Padang\Padang4aController;
use App\Http\Controllers\Padang\Padang5aController;
use App\Http\Controllers\Padang\Padang5bController;
use App\Http\Controllers\Padang\Padang5cController;
use App\Http\Controllers\Padang\Padang5dController;
use App\Http\Controllers\Padang\Padang5eController;
use App\Http\Controllers\Padang\Padang6aController;
use App\Http\Controllers\Padang\Padang7aController;
use App\Http\Controllers\Padang\Padang7bController;
use App\Http\Controllers\Padang\Padang7cController;
use App\Http\Controllers\Padang\Padang8aController;
use App\Http\Controllers\Padang\Padang9aController;
use App\Http\Controllers\PandaankeamananController;
use App\Http\Controllers\RekapbanjarbaruController;
use App\Http\Controllers\RekapkikeamananController;
use App\Http\Controllers\divisi\Jakartak3Controller;
use App\Http\Controllers\divisi\Makasark3Controller;
use App\Http\Controllers\divisi\Pandaank3Controller;
use App\Http\Controllers\SemarangkeamananController;
use App\Http\Controllers\SuralayakeamananController;
use App\Http\Controllers\cetak\CetakpadangController;
use App\Http\Controllers\divisi\Semarangk3Controller;
use App\Http\Controllers\divisi\Suralayak3Controller;
use App\Http\Controllers\Jakarta\Jakarta1aController;
use App\Http\Controllers\Jakarta\Jakarta1bController;
use App\Http\Controllers\Jakarta\Jakarta2aController;
use App\Http\Controllers\Jakarta\Jakarta2bController;
use App\Http\Controllers\Jakarta\Jakarta2cController;
use App\Http\Controllers\Jakarta\Jakarta2dController;
use App\Http\Controllers\Jakarta\Jakarta3aController;
use App\Http\Controllers\Jakarta\Jakarta3bController;
use App\Http\Controllers\Jakarta\Jakarta4aController;
use App\Http\Controllers\Jakarta\Jakarta5bController;
use App\Http\Controllers\Jakarta\Jakarta5cController;
use App\Http\Controllers\Jakarta\Jakarta5dController;
use App\Http\Controllers\Jakarta\Jakarta5eController;
use App\Http\Controllers\Jakarta\Jakarta6aController;
use App\Http\Controllers\Jakarta\Jakarta7aController;
use App\Http\Controllers\Jakarta\Jakarta7bController;
use App\Http\Controllers\Jakarta\Jakarta7cController;
use App\Http\Controllers\Jakarta\Jakarta8aController;
use App\Http\Controllers\Jakarta\Jakarta9aController;
use App\Http\Controllers\KerawanankeamananController;
use App\Http\Controllers\Makasar\Makasar1aController;
use App\Http\Controllers\Makasar\Makasar1bController;
use App\Http\Controllers\Makasar\Makasar2aController;
use App\Http\Controllers\Makasar\Makasar2bController;
use App\Http\Controllers\Makasar\Makasar2cController;
use App\Http\Controllers\Makasar\Makasar2dController;
use App\Http\Controllers\Makasar\Makasar3aController;
use App\Http\Controllers\Makasar\Makasar3bController;
use App\Http\Controllers\Makasar\Makasar4aController;
use App\Http\Controllers\Makasar\Makasar5aController;
use App\Http\Controllers\Makasar\Makasar5bController;
use App\Http\Controllers\Makasar\Makasar5cController;
use App\Http\Controllers\Makasar\Makasar5dController;
use App\Http\Controllers\Makasar\Makasar5eController;
use App\Http\Controllers\Makasar\Makasar6aController;
use App\Http\Controllers\Makasar\Makasar7aController;
use App\Http\Controllers\Makasar\Makasar7bController;
use App\Http\Controllers\Makasar\Makasar7cController;
use App\Http\Controllers\Makasar\Makasar8aController;
use App\Http\Controllers\Makasar\Makasar9aController;
use App\Http\Controllers\PalembangkeamananController;
use App\Http\Controllers\Pandaan\Pandaan1aController;
use App\Http\Controllers\Pandaan\Pandaan1bController;
use App\Http\Controllers\Pandaan\Pandaan2aController;
use App\Http\Controllers\Pandaan\Pandaan2bController;
use App\Http\Controllers\Pandaan\Pandaan2cController;
use App\Http\Controllers\Pandaan\Pandaan2dController;
use App\Http\Controllers\Pandaan\Pandaan3aController;
use App\Http\Controllers\Pandaan\Pandaan3bController;
use App\Http\Controllers\Pandaan\Pandaan4aController;
use App\Http\Controllers\Pandaan\Pandaan5aController;
use App\Http\Controllers\Pandaan\Pandaan5bController;
use App\Http\Controllers\Pandaan\Pandaan5cController;
use App\Http\Controllers\Pandaan\Pandaan5dController;
use App\Http\Controllers\Pandaan\Pandaan5eController;
use App\Http\Controllers\Pandaan\Pandaan6aController;
use App\Http\Controllers\Pandaan\Pandaan7aController;
use App\Http\Controllers\Pandaan\Pandaan7bController;
use App\Http\Controllers\Pandaan\Pandaan7cController;
use App\Http\Controllers\Pandaan\Pandaan8aController;
use App\Http\Controllers\Pandaan\Pandaan9aController;
use App\Http\Controllers\PelatihankeamananController;
use App\Http\Controllers\PengajuandiajukanController;
use App\Http\Controllers\PengajuandirevisiController;
use App\Http\Controllers\TuntungankeamananController;
use App\Http\Controllers\BanjarbarukeamananController;
use App\Http\Controllers\cetak\CetakjakartaController;
use App\Http\Controllers\CetakindukkeamananController;
use App\Http\Controllers\divisi\Palembangk3Controller;
use App\Http\Controllers\divisi\Tuntungank3Controller;
use App\Http\Controllers\PengamanankeamananController;
use App\Http\Controllers\VerifikasikeamananController;
use App\Http\Controllers\CetakbanjarkeamananController;
use App\Http\Controllers\CetakpadangkeamananController;
use App\Http\Controllers\divisi\Banjarbaruk3Controller;
use App\Http\Controllers\Divisibogor\Admin1aController;
use App\Http\Controllers\Divisibogor\Bogor1bController;
use App\Http\Controllers\Divisibogor\Bogor2aController;
use App\Http\Controllers\Divisibogor\Bogor2bController;
use App\Http\Controllers\Divisibogor\Bogor2cController;
use App\Http\Controllers\Divisibogor\Bogor2dController;
use App\Http\Controllers\Divisibogor\Bogor3aController;
use App\Http\Controllers\Divisibogor\Bogor3bController;
use App\Http\Controllers\Divisibogor\Bogor4aController;
use App\Http\Controllers\Divisibogor\Bogor5aController;
use App\Http\Controllers\Divisibogor\Bogor5bController;
use App\Http\Controllers\Divisibogor\Bogor5cController;
use App\Http\Controllers\Divisibogor\Bogor5dController;
use App\Http\Controllers\Divisibogor\Bogor5eController;
use App\Http\Controllers\Divisibogor\Bogor6aController;
use App\Http\Controllers\Divisibogor\Bogor7aController;
use App\Http\Controllers\Divisibogor\Bogor7bController;
use App\Http\Controllers\Divisibogor\Bogor7cController;
use App\Http\Controllers\Divisibogor\Bogor8aController;
use App\Http\Controllers\Divisibogor\Bogor9aController;
use App\Http\Controllers\Semarang\Semarang1aController;
use App\Http\Controllers\Semarang\Semarang1bController;
use App\Http\Controllers\Semarang\Semarang2aController;
use App\Http\Controllers\Semarang\Semarang2bController;
use App\Http\Controllers\Semarang\Semarang2cController;
use App\Http\Controllers\Semarang\Semarang2dController;
use App\Http\Controllers\Semarang\Semarang3aController;
use App\Http\Controllers\Semarang\Semarang3bController;
use App\Http\Controllers\Semarang\Semarang4aController;
use App\Http\Controllers\Semarang\Semarang5aController;
use App\Http\Controllers\Semarang\Semarang5bController;
use App\Http\Controllers\Semarang\Semarang5cController;
use App\Http\Controllers\Semarang\Semarang5dController;
use App\Http\Controllers\Semarang\Semarang5eController;
use App\Http\Controllers\Semarang\Semarang6aController;
use App\Http\Controllers\Semarang\Semarang7aController;
use App\Http\Controllers\Semarang\Semarang7bController;
use App\Http\Controllers\Semarang\Semarang7cController;
use App\Http\Controllers\Semarang\Semarang8aController;
use App\Http\Controllers\Semarang\Semarang9aController;
use App\Http\Controllers\Suralaya\Suralaya1aController;
use App\Http\Controllers\Suralaya\Suralaya1bController;
use App\Http\Controllers\Suralaya\Suralaya2aController;
use App\Http\Controllers\Suralaya\Suralaya2bController;
use App\Http\Controllers\Suralaya\Suralaya2cController;
use App\Http\Controllers\Suralaya\Suralaya2dController;
use App\Http\Controllers\Suralaya\Suralaya3aController;
use App\Http\Controllers\Suralaya\Suralaya3bController;
use App\Http\Controllers\Suralaya\Suralaya4aController;
use App\Http\Controllers\Suralaya\Suralaya5aController;
use App\Http\Controllers\Suralaya\Suralaya5bController;
use App\Http\Controllers\Suralaya\Suralaya5cController;
use App\Http\Controllers\Suralaya\Suralaya5dController;
use App\Http\Controllers\Suralaya\Suralaya5eController;
use App\Http\Controllers\Suralaya\Suralaya6aController;
use App\Http\Controllers\Suralaya\Suralaya7aController;
use App\Http\Controllers\Suralaya\Suralaya7bController;
use App\Http\Controllers\Suralaya\Suralaya7cController;
use App\Http\Controllers\Suralaya\Suralaya8aController;
use App\Http\Controllers\Suralaya\Suralaya9aController;
use App\Http\Controllers\CetakjakartakeamananController;
use App\Http\Controllers\CetakmakasarkeamananController;
use App\Http\Controllers\CetakpandaankeamananController;
use App\Http\Controllers\Divisibogor\TtebogorController;
use App\Http\Controllers\KepemimpinankeamananController;
use App\Http\Controllers\Suralaya\Tuntungan7aController;
use App\Http\Controllers\CetaksemarangkeamananController;
use App\Http\Controllers\CetaksuralayakeamananController;
use App\Http\Controllers\Divisibanjar\Banjar1aController;
use App\Http\Controllers\Divisibanjar\Banjar1bController;
use App\Http\Controllers\Divisibanjar\Banjar2aController;
use App\Http\Controllers\Divisibanjar\Banjar2bController;
use App\Http\Controllers\Divisibanjar\Banjar2cController;
use App\Http\Controllers\Divisibanjar\Banjar2dController;
use App\Http\Controllers\Divisibanjar\Banjar3aController;
use App\Http\Controllers\Divisibanjar\Banjar3bController;
use App\Http\Controllers\Divisibanjar\Banjar4aController;
use App\Http\Controllers\Divisibanjar\Banjar5aController;
use App\Http\Controllers\Divisibanjar\Banjar5bController;
use App\Http\Controllers\Divisibanjar\Banjar5cController;
use App\Http\Controllers\Divisibanjar\Banjar5dController;
use App\Http\Controllers\Divisibanjar\Banjar5eController;
use App\Http\Controllers\Divisibanjar\Banjar6aController;
use App\Http\Controllers\Divisibanjar\Banjar7aController;
use App\Http\Controllers\Divisibanjar\Banjar7bController;
use App\Http\Controllers\Divisibanjar\Banjar7cController;
use App\Http\Controllers\Divisibanjar\Banjar8aController;
use App\Http\Controllers\Divisibanjar\Banjar9aController;
use App\Http\Controllers\Divisibogor\Jakarta5aController;
use App\Http\Controllers\Palembang\Palembang1aController;
use App\Http\Controllers\Palembang\Palembang1bController;
use App\Http\Controllers\Palembang\Palembang2aController;
use App\Http\Controllers\Palembang\Palembang2bController;
use App\Http\Controllers\Palembang\Palembang2cController;
use App\Http\Controllers\Palembang\Palembang2dController;
use App\Http\Controllers\Palembang\Palembang3aController;
use App\Http\Controllers\Palembang\Palembang3bController;
use App\Http\Controllers\Palembang\Palembang4aController;
use App\Http\Controllers\Palembang\Palembang5aController;
use App\Http\Controllers\Palembang\Palembang5bController;
use App\Http\Controllers\Palembang\Palembang5cController;
use App\Http\Controllers\Palembang\Palembang5dController;
use App\Http\Controllers\Palembang\Palembang5eController;
use App\Http\Controllers\Palembang\Palembang6aController;
use App\Http\Controllers\Palembang\Palembang7aController;
use App\Http\Controllers\Palembang\Palembang7bController;
use App\Http\Controllers\Palembang\Palembang7cController;
use App\Http\Controllers\Palembang\Palembang8aController;
use App\Http\Controllers\Palembang\Palembang9aController;
use App\Http\Controllers\rekap\AdminrekapbogorController;
use App\Http\Controllers\Tuntungan\Tuntungan1aController;
use App\Http\Controllers\Tuntungan\Tuntungan1bController;
use App\Http\Controllers\Tuntungan\Tuntungan2aController;
use App\Http\Controllers\Tuntungan\Tuntungan2bController;
use App\Http\Controllers\Tuntungan\Tuntungan2cController;
use App\Http\Controllers\Tuntungan\Tuntungan2dController;
use App\Http\Controllers\Tuntungan\Tuntungan3aController;
use App\Http\Controllers\Tuntungan\Tuntungan3bController;
use App\Http\Controllers\Tuntungan\Tuntungan4aController;
use App\Http\Controllers\Tuntungan\Tuntungan5aController;
use App\Http\Controllers\Tuntungan\Tuntungan5bController;
use App\Http\Controllers\Tuntungan\Tuntungan5cController;
use App\Http\Controllers\Tuntungan\Tuntungan5eController;
use App\Http\Controllers\Tuntungan\Tuntungan6aController;
use App\Http\Controllers\Tuntungan\Tuntungan7bController;
use App\Http\Controllers\Tuntungan\Tuntungan7cController;
use App\Http\Controllers\Tuntungan\Tuntungan8aController;
use App\Http\Controllers\Tuntungan\Tuntungan9aController;
use Modules\Keamanan\Http\Controllers\KeamananController;
use App\Http\Controllers\CetakpalembangkeamananController;
use App\Http\Controllers\CetaktuntungankeamananController;
use App\Http\Controllers\rekap\AdminrekappadangController;
use App\Http\Controllers\rekap\AdminrekapjakartaController;
use App\Http\Controllers\rekap\AdminrekapmakasarController;
use App\Http\Controllers\rekap\AdminrekapsuralayaController;
use App\Http\Controllers\rekap\AdminrekappalembangController;
use App\Http\Controllers\rekap\AdminrekaptuntunganController;
use Modules\Lingkungan\Http\Controllers\LingkunganController;
use App\Http\Controllers\rekap\AdminrekapbanjarbaruController;

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

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->controller(UserController::class)->prefix('user')->group(function ()
{
    Route::get('/','index')->name('user');
    
    Route::get('/create','create')->name('user/create');

    
    
    Route::get('/edit/{id}', 'edit')->name('user/edit')->where('id','[0-9]+');
    
    Route::post('/update', 'update')->name('user/update')->where('id','[0-9]+');

    Route::get('/destroy/{id}', 'destroy')->name('user/destroy')->where('id','[0-9]+');


});

Route::middleware('auth')->controller(ProfileController::class)->prefix("profile")->group(function (){
   
    Route::get('/edit','edit')->name('profile/edit');

    Route::post('/update','update')->name('profile/update');

    Route::post('/updatePassword','updatePassword')->name('profile/updatePassword');

});

Route::middleware('auth')->controller(RoleController::class)->prefix("role")->group(function (){

Route::get('/', 'index')->name('role');

Route::get('/create', 'create')->name('role/create');

Route::post('/store', 'store')->name('role/store');

Route::get('/edit/{id}', 'edit')->name('role/edit')->where('id','[0-9]+');

Route::post('/update', 'update')->name('role/update')->where('id','[0-9]+');

Route::get('/destroy/{id}', 'destroy')->name('role/destroy')->where('id','[0-9]+');

});


Route::middleware('auth')->controller(CategoryController::class)->prefix("category")->group(function (){

    Route::get('/', 'index')->name('category');
    
    Route::get('/create', 'create')->name('category/create');
    
    Route::post('/store', 'store')->name('category/store');
    
    Route::get('/edit/{id}', 'edit')->name('category/edit')->where('id','[0-9]+');
    
    Route::post('/update', 'update')->name('category/update')->where('id','[0-9]+');
    
    Route::get('/destroy/{id}', 'destroy')->name('category/destroy')->where('id','[0-9]+');
    
});

Auth::routes();
Route::resource('/daftar', DaftarakunController::class  );
Route::resource('/verifikasi', VerifikasikeamananController::class  );
Route::resource('/dashboardkeamanan', AdminkeamananController::class );
Route::resource('/kepemimpinan', KepemimpinankeamananController::class );
Route::resource('/sosial', SosialkeamananController::class );
Route::resource('/pengamanan', PengamanankeamananController::class );
Route::resource('/kerawanan', KerawanankeamananController::class );
Route::resource('/pelatihan', PelatihankeamananController::class );
Route::resource('/manager', ManagerkeamananController::class );
Route::resource('/lapor', LaporkeamananController::class );

// MENU
Route::get('k3::index', [K3Controller::class, 'index'])->name('k3');
Route::get('keamanan::index', [KeamananController::class, 'index'])->name('keamanan');
Route::get('lingkungan::index', [LingkunganController::class, 'index'])->name('lingkungan');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// TRIWULAN
// KANTOR INDUK
Route::resource('/kikeamanan', KikeamananController::class );
Route::get('/kikeamanantw1', [KikeamananController::class,'tw1']);
Route::get('/kikeamanantw2', [KikeamananController::class,'tw2']);
Route::get('/kikeamanantw3', [KikeamananController::class,'tw3']);
Route::get('/kikeamanantw4', [KikeamananController::class,'tw4']);
// BANJARBARU
Route::resource('/banjarbarukeamanan', BanjarbarukeamananController::class );
Route::get('/banjarbarukeamanantw1', [BanjarbarukeamananController::class,'tw1']);
Route::get('/banjarbarukeamanantw2', [BanjarbarukeamananController::class,'tw2']);
Route::get('/banjarbarukeamanantw3', [BanjarbarukeamananController::class,'tw3']);
Route::get('/banjarbarukeamanantw4', [BanjarbarukeamananController::class,'tw4']);
// BOGOR
Route::resource('/bogorkeamanan', BogorkeamananController::class );
Route::get('/bogorkeamanantw1', [BogorkeamananController::class,'tw1']);
Route::get('/bogorkeamanantw2', [BogorkeamananController::class,'tw2']);
Route::get('/bogorkeamanantw3', [BogorkeamananController::class,'tw3']);
Route::get('/bogorkeamanantw4', [BogorkeamananController::class,'tw4']);
// JAKARTA
Route::resource('/jakartakeamanan', JakartakeamananController::class );
Route::get('/jakartakeamanantw1', [JakartakeamananController::class,'tw1']);
Route::get('/jakartakeamanantw2', [JakartakeamananController::class,'tw2']);
Route::get('/jakartakeamanantw3', [JakartakeamananController::class,'tw3']);
Route::get('/jakartakeamanantw4', [JakartakeamananController::class,'tw4']);
// MAKASAR
Route::resource('/makasarkeamanan', MakasarkeamananController::class );
Route::get('/makasarkeamanantw1', [MakasarkeamananController::class,'tw1']);
Route::get('/makasarkeamanantw2', [MakasarkeamananController::class,'tw2']);
Route::get('/makasarkeamanantw3', [MakasarkeamananController::class,'tw3']);
Route::get('/makasarkeamanantw4', [MakasarkeamananController::class,'tw4']);
// PADANG
Route::resource('/padangkeamanan', PadangkeamananController::class );
Route::get('/padangkeamanantw1', [PadangkeamananController::class,'tw1']);
Route::get('/padangkeamanantw2', [PadangkeamananController::class,'tw2']);
Route::get('/padangkeamanantw3', [PadangkeamananController::class,'tw3']);
Route::get('/padangkeamanantw4', [PadangkeamananController::class,'tw4']);
// PALEMBANG
Route::resource('/palembangkeamanan', PalembangkeamananController::class );
Route::get('/palembangkeamanantw1', [PalembangkeamananController::class,'tw1']);
Route::get('/palembangkeamanantw2', [PalembangkeamananController::class,'tw2']);
Route::get('/palembangkeamanantw3', [PalembangkeamananController::class,'tw3']);
Route::get('/palembangkeamanantw4', [PalembangkeamananController::class,'tw4']);
// PANDAAN
Route::resource('/pandaankeamanan', PandaankeamananController::class );
Route::get('/pandaankeamanantw1', [PandaankeamananController::class,'tw1']);
Route::get('/pandaankeamanantw2', [PandaankeamananController::class,'tw2']);
Route::get('/pandaankeamanantw3', [PandaankeamananController::class,'tw3']);
Route::get('/pandaankeamanantw4', [PandaankeamananController::class,'tw4']);
// SEMARANG
Route::resource('/semarangkeamanan', SemarangkeamananController::class );
Route::get('/semarangkeamanantw1', [SemarangkeamananController::class,'tw1']);
Route::get('/semarangkeamanantw2', [SemarangkeamananController::class,'tw2']);
Route::get('/semarangkeamanantw3', [SemarangkeamananController::class,'tw3']);
Route::get('/semarangkeamanantw4', [SemarangkeamananController::class,'tw4']);
// SURALAYA
Route::resource('/suralayakeamanan', SuralayakeamananController::class );
Route::get('/suralayakeamanantw1', [SuralayakeamananController::class,'tw1']);
Route::get('/suralayakeamanantw2', [SuralayakeamananController::class,'tw2']);
Route::get('/suralayakeamanantw3', [SuralayakeamananController::class,'tw3']);
Route::get('/suralayakeamanantw4', [SuralayakeamananController::class,'tw4']);
// TUNTUNGAN
Route::resource('/tuntungankeamanan', TuntungankeamananController::class );
Route::get('/tuntungankeamanantw1', [TuntungankeamananController::class,'tw1']);
Route::get('/tuntungankeamanantw2', [TuntungankeamananController::class,'tw2']);
Route::get('/tuntungankeamanantw3', [TuntungankeamananController::class,'tw3']);
Route::get('/tuntungankeamanantw4', [TuntungankeamananController::class,'tw4']);
// AHKIR TRIWULAN


// CETAK FORMULIR
Route::get('/cetakinduk', [CetakindukkeamananController::class, 'index'])->name('cetakinduk');
Route::get('/cetakbogor', [CetakbgrController::class, 'index'])->name('cetakbogor');
Route::get('/cetakbanjarbaru', [CetakbanjarkeamananController::class, 'index'])->name('cetakbanjarbaru');
Route::get('/cetakjakarta', [CetakjakartakeamananController::class, 'index'])->name('cetakjakarta');
Route::get('/cetakmakasar', [CetakmakasarkeamananController::class, 'index'])->name('cetakmakasar');
Route::get('/cetakpadang', [CetakpadangkeamananController::class, 'index'])->name('cetakpadang');
Route::get('/cetakpalembang', [CetakpalembangkeamananController::class, 'index'])->name('cetakpalembang');
Route::get('/cetakpandaan', [CetakpandaankeamananController::class, 'index'])->name('cetakpandaan');
Route::get('/cetaksemarang', [CetaksemarangkeamananController::class, 'index'])->name('cetaksemarang');
Route::get('/cetaksuralaya', [CetaksuralayakeamananController::class, 'index'])->name('cetaksuralaya');
Route::get('/cetaktuntungan', [CetaktuntungankeamananController::class, 'index'])->name('cetaktuntungan');
// AHKIR CETAK


// GENERATE LEVEL
// REKAP KANTOR INDUK
Route::get('/rekapkantorinduk', [RekapkikeamananController::class, 'index'])->name('rekapkantorinduk');
Route::get('/rekapkantorinduktw1', [RekapkikeamananController::class, 'index'])->name('rekapkantorinduktw1');
Route::get('/rekapkantorinduktw2', [RekapkikeamananController::class, 'index'])->name('rekapkantorinduktw2');
Route::get('/rekapkantorinduktw3', [RekapkikeamananController::class, 'index'])->name('rekapkantorinduktw3');
Route::get('/rekapkantorinduktw4', [RekapkikeamananController::class, 'index'])->name('rekapkantorinduktw4');
// REKAP BANJARBARU
Route::get('/rekapbanjarbaru', [RekapbanjarbaruController::class, 'index'])->name('rekapbanjarbaru');
Route::get('/rekapbanjarbarutw1', [RekapbanjarbaruController::class, 'tw1'])->name('rekapbanjarbarutw1');
Route::get('/rekapbanjarbarutw2', [RekapbanjarbaruController::class, 'tw2'])->name('rekapbanjarbarutw2');
Route::get('/rekapbanjarbarutw3', [RekapbanjarbaruController::class, 'tw3'])->name('rekapbanjarbarutw3');
Route::get('/rekapbanjarbarutw4', [RekapbanjarbaruController::class, 'tw4'])->name('rekapbanjarbarutw4');
// REKAP BOGOR
Route::get('/rekapbogor', [RekapbogorController::class, 'index'])->name('rekapbogor');
Route::get('/rekapbogortw1', [RekapbogorController::class, 'tw1'])->name('rekapbogortw1');
Route::get('/rekapbogortw2', [RekapbogorController::class, 'tw2'])->name('rekapbogortw2');
Route::get('/rekapbogortw3', [RekapbogorController::class, 'tw3'])->name('rekapbogortw3');
Route::get('/rekapbogortw4', [RekapbogorController::class, 'tw4'])->name('rekapbogortw4');
// REKAP JAKARTA
Route::get('/rekapjakarta', [RekapjakartaController::class, 'index'])->name('rekapjakarta');
Route::get('/rekapjakartatw1', [RekapjakartaController::class, 'tw1'])->name('rekapjakartatw1');
Route::get('/rekapjakartatw2', [RekapjakartaController::class, 'tw2'])->name('rekapjakartatw2');
Route::get('/rekapjakartatw3', [RekapjakartaController::class, 'tw3'])->name('rekapjakartatw3');
Route::get('/rekapjakartatw4', [RekapjakartaController::class, 'tw4'])->name('rekapjakartatw4');
// REKAP MAKASAR
Route::get('/rekapmakasar', [RekapmakasarController::class, 'index'])->name('rekapmakasar');
Route::get('/rekapmakasartw1', [RekapmakasarController::class, 'tw1'])->name('rekapmakasartw1');
Route::get('/rekapmakasartw2', [RekapmakasarController::class, 'tw2'])->name('rekapmakasartw2');
Route::get('/rekapmakasartw3', [RekapmakasarController::class, 'tw3'])->name('rekapmakasartw3');
Route::get('/rekapmakasartw4', [RekapmakasarController::class, 'tw4'])->name('rekapmakasartw4');
// REKAP PADANG
Route::get('/rekappadang', [RekappadangController::class, 'index'])->name('rekappadang');
Route::get('/rekappadangtw1', [RekappadangController::class, 'tw1'])->name('rekappadangtw1');
Route::get('/rekappadangtw2', [RekappadangController::class, 'tw2'])->name('rekappadangtw2');
Route::get('/rekappadangtw3', [RekappadangController::class, 'tw3'])->name('rekappadangtw3');
Route::get('/rekappadangtw4', [RekappadangController::class, 'tw4'])->name('rekappadangtw4');
// REKAP PALEMBANG
Route::get('/rekappalembang', [RekappalembangController::class, 'index'])->name('rekappalembang');
Route::get('/rekappalembangtw1', [RekappalembangController::class, 'tw1'])->name('rekappalembangtw1');
Route::get('/rekappalembangtw2', [RekappalembangController::class, 'tw2'])->name('rekappalembangtw2');
Route::get('/rekappalembangtw3', [RekappalembangController::class, 'tw3'])->name('rekappalembangtw3');
Route::get('/rekappalembangtw4', [RekappalembangController::class, 'tw4'])->name('rekappalembangtw4');
// REKAP PANDAAN
Route::get('/rekappandaan', [RekappandaanController::class, 'index'])->name('rekappandaan');
Route::get('/rekappandaantw1', [RekappandaanController::class, 'tw1'])->name('rekappandaantw1');
Route::get('/rekappandaantw2', [RekappandaanController::class, 'tw2'])->name('rekappandaantw2');
Route::get('/rekappandaantw3', [RekappandaanController::class, 'tw3'])->name('rekappandaantw3');
Route::get('/rekappandaantw4', [RekappandaanController::class, 'tw4'])->name('rekappandaantw4');
// REKAP SEMARANG
Route::get('/rekapsemarang', [RekapsemarangController::class, 'index'])->name('rekapsemarang');
Route::get('/rekapsemarangtw1', [RekapsemarangController::class, 'tw1'])->name('rekapsemarangtw1');
Route::get('/rekapsemarangtw2', [RekapsemarangController::class, 'tw2'])->name('rekapsemarangtw2');
Route::get('/rekapsemarangtw3', [RekapsemarangController::class, 'tw3'])->name('rekapsemarangtw3');
Route::get('/rekapsemarangtw4', [RekapsemarangController::class, 'tw4'])->name('rekapsemarangtw4');
// REKAP SURALAYA
Route::get('/rekapsuralaya', [RekapsuralayaController::class, 'index'])->name('rekapsuralaya');
Route::get('/rekapsuralayatw1', [RekapsuralayaController::class, 'tw1'])->name('rekapsuralayatw1');
Route::get('/rekapsuralayatw2', [RekapsuralayaController::class, 'tw2'])->name('rekapsuralayatw2');
Route::get('/rekapsuralayatw3', [RekapsuralayaController::class, 'tw3'])->name('rekapsuralayatw3');
Route::get('/rekapsuralayatw4', [RekapsuralayaController::class, 'tw4'])->name('rekapsuralayatw4');
// REKAP TUNTUNGAN
Route::get('/rekaptuntungan', [RekaptuntunganController::class, 'index'])->name('rekaptuntungan');
Route::get('/rekaptuntungantw1', [RekaptuntunganController::class, 'tw1'])->name('rekaptuntungantw1');
Route::get('/rekaptuntungantw2', [RekaptuntunganController::class, 'tw2'])->name('rekaptuntungantw2');
Route::get('/rekaptuntungantw3', [RekaptuntunganController::class, 'tw3'])->name('rekaptuntungantw3');
Route::get('/rekaptuntungantw4', [RekaptuntunganController::class, 'tw4'])->name('rekaptuntungantw4');
// AHKIR GENERATE LEVEL
// AHKIR KEAMANAN

// K3
Route::resource('/pengajuandiajukan', PengajuandiajukanController::class  );
// Route::resource('/pengajuandirevisi', PengajuandirevisiController::class  );
Route::resource('/auditdiajukan', AuditdiajukanController::class  );
Route::resource('/penerapan', Penerapank3Controller::class  );
Route::resource('/safeti', Safetik3Controller::class  );
Route::resource('/comunication', Comunicationk3Controller::class  );
Route::resource('/reporting', Reportingk3Controller::class  );
//1 bogortable
Route::resource('/bogork3', Bogork3Controller::class,);
Route::get('/bogork3tw1', [Bogork3Controller::class,'tw1']);
Route::get('/bogork3tw2', [Bogork3Controller::class,'tw2']);
Route::get('/bogork3tw3', [Bogork3Controller::class,'tw3']);
Route::get('/bogork3tw4', [Bogork3Controller::class,'tw4']);
Route::get('/bogork3tw12023', [Bogork3Controller::class,'tw12023']);
Route::get('/bogork3tw22023', [Bogork3Controller::class,'tw22023']);
Route::get('/bogork3tw32023', [Bogork3Controller::class,'tw32023']);
Route::get('/bogork3tw42023', [Bogork3Controller::class,'tw42023']);
//2 padangtable
Route::resource('/padangk3', Padangk3Controller::class  );
Route::get('/padangk3tw1', [Padangk3Controller::class,'tw1']  );
Route::get('/padangk3tw2', [Padangk3Controller::class,'tw2']  );
Route::get('/padangk3tw3', [Padangk3Controller::class,'tw3']  );
Route::get('/padangk3tw4', [Padangk3Controller::class,'tw4']  );
Route::get('/padangk3tw12023', [Padangk3Controller::class,'tw12023']);
Route::get('/padangk3tw22023', [Padangk3Controller::class,'tw22023']  );
Route::get('/padangk3tw32023', [Padangk3Controller::class,'tw32023']  );
Route::get('/padangk3tw42023', [Padangk3Controller::class,'tw42023']  );
//3 jakartatable
Route::resource('/jakartak3', Jakartak3Controller::class  );
Route::get('/jakartak3tw1', [Jakartak3Controller::class,'tw1' ] );
Route::get('/jakartak3tw2', [Jakartak3Controller::class,'tw2' ] );
Route::get('/jakartak3tw3', [Jakartak3Controller::class,'tw3' ] );
Route::get('/jakartak3tw4', [Jakartak3Controller::class,'tw4' ] );
Route::get('/jakartak3tw12023', [Jakartak3Controller::class,'tw12023' ] );
Route::get('/jakartak3tw22023', [Jakartak3Controller::class,'tw22023' ] );
Route::get('/jakartak3tw32023', [Jakartak3Controller::class,'tw32023' ] );
Route::get('/jakartak3tw42023', [Jakartak3Controller::class,'tw42023' ] );
//4 banjarbarutable
Route::resource('/banjarbaruk3', Banjarbaruk3Controller::class  );
//5 makasartable
Route::resource('/makasark3', Makasark3Controller::class  );
//6 palembangtable
Route::resource('/palembangk3', Palembangk3Controller::class  );
//7 pandaantable
Route::resource('/pandaank3', Pandaank3Controller::class  );
//8 semarangtable
Route::resource('/semarangk3', Semarangk3Controller::class  );
//9 suralayatable
Route::resource('/suralayak3', Suralayak3Controller::class  );
// tuntungantable
Route::resource('/Tuntungank3', Tuntungank3Controller::class  );
// Route::resource('/contoh', ContohController::class  );
Route::resource('/dashboardk3', Admink3Controller::class );
Route::get('/cetakpdfbogor', [CetakController::class, 'index'])->name('cetakpdfbogor');
// cetakjakarta
Route::get('/cetakpdfjakarta', [CetakjakartaController::class, 'index'])->name('cetakpdfjakarta');
// cetakpadang
Route::get('/cetakpdfpadang', [CetakpadangController::class, 'index'])->name('cetakpdfpadang');
// rekapdatabogor
Route::get('/rekapdatabogor', [AdminrekapbogorController::class, 'index'])->name('rekapdatabogor');
Route::get('/rekapdatabogortw1', [AdminrekapbogorController::class, 'tw1'])->name('rekapdatabogortw1');
Route::get('/rekapdatabogortw2', [AdminrekapbogorController::class, 'tw2'])->name('rekapdatabogortw2');
Route::get('/rekapdatabogortw3', [AdminrekapbogorController::class, 'tw3'])->name('rekapdatabogortw3');
Route::get('/rekapdatabogortw4', [AdminrekapbogorController::class, 'tw4'])->name('rekapdatabogortw4');
// rekapdatabanjarbaru
Route::get('/rekapdatabanjarbaru', [AdminrekapbanjarbaruController::class, 'index'])->name('rekapdatabanjarbaru');
// rekapdatajakarta
Route::get('/rekapdatajakarta', [AdminrekapjakartaController::class, 'index'])->name('rekapdatajakarta');
// rekapdatamakasar
Route::get('/rekapdatamakasar', [AdminrekapmakasarController::class, 'index'])->name('rekapdatamakasar');
// rekapdatapadang
Route::get('/rekapdatapadang', [AdminrekappadangController::class, 'index'])->name('rekapdatapadang');
Route::get('/rekapdatapadangtw1', [AdminrekappadangController::class, 'tw1'])->name('rekapdatapadangtw1');
// rekapdatapalembang
Route::get('/rekapdatapalembang', [AdminrekappalembangController::class, 'index'])->name('rekapdatapalembang');
// rekapdatapandaan
Route::get('/rekapdatapandaan', [AdminrekappandaanController::class, 'index'])->name('rekapdatapandaan');
// rekapdatasemarang
Route::get('/rekapdatasemarang', [AdminrekapsemarangController::class, 'index'])->name('rekapdatasemarang');
// rekapdatasuralaya
Route::get('/rekapdatasuralaya', [AdminrekapsuralayaController::class, 'index'])->name('rekapdatasuralaya');
// rekapdatatuntungan
Route::get('/rekapdatatuntungan', [AdminrekaptuntunganController::class, 'index'])->name('rekapdatatuntungan');

// AHKIR K3

// LINGKUNGAN
Route::resource('/adling', AdlingController::class  );
Route::resource('/admin1a', Admin1aController::class  );
Route::resource('/bogor1b', Bogor1bController::class  );
Route::resource('/bogor2a', Bogor2aController::class  );
Route::resource('/bogor2b', Bogor2bController::class  );
Route::resource('/bogor2c', Bogor2cController::class  );
Route::resource('/bogor2d', Bogor2dController::class  );
Route::resource('/bogor3a', Bogor3aController::class  );
Route::resource('/bogor3b', Bogor3bController::class  );
Route::resource('/bogor4a', Bogor4aController::class  );
Route::resource('/bogor5a', Bogor5aController::class  );
Route::resource('/bogor5b', Bogor5bController::class  );
Route::resource('/bogor5c', Bogor5cController::class  );
Route::resource('/bogor5d', Bogor5dController::class  );
Route::resource('/bogor5e', Bogor5eController::class  );
Route::resource('/banjar1a', Banjar1aController::class  );
Route::resource('/banjar1b', Banjar1bController::class  );
Route::resource('/banjar2a', Banjar2aController::class  );
Route::resource('/banjar2b', Banjar2bController::class  );
Route::resource('/banjar2c', Banjar2cController::class  );
Route::resource('/banjar2d', Banjar2dController::class  );
Route::resource('/banjar3a', Banjar3aController::class  );
Route::resource('/banjar3b', Banjar3bController::class  );
Route::resource('/banjar4a', Banjar4aController::class  );
Route::resource('/banjar5a', Banjar5aController::class  );
Route::resource('/banjar5b', Banjar5bController::class  );
Route::resource('/banjar5c', Banjar5cController::class  );
Route::resource('/banjar5d', Banjar5dController::class  );
Route::resource('/banjar5e', Banjar5eController::class  );
Route::resource('/kantor1a', Kantor1aController::class  );
Route::resource('/kantor1b', Kantor1bController::class  );
Route::resource('/kantor2a', Kantor2aController::class  );
Route::resource('/kantor2b', Kantor2bController::class  );
Route::resource('/kantor2c', Kantor2cController::class  );
Route::resource('/kantor2d', Kantor2dController::class  );
Route::resource('/kantor3a', Kantor3aController::class  );
Route::resource('/kantor3b', Kantor3bController::class  );
Route::resource('/kantor4a', Kantor4aController::class  );
Route::resource('/kantor5a', Kantor5aController::class  );
Route::resource('/kantor5b', Kantor5bController::class  );
Route::resource('/kantor5c', Kantor5cController::class  );
Route::resource('/kantor5d', Kantor5dController::class  );
Route::resource('/kantor5e', Kantor5eController::class  );
Route::resource('/jakarta1a', Jakarta1aController::class  );
Route::resource('/jakarta1b', Jakarta1bController::class  );
Route::resource('/jakarta2a', Jakarta2aController::class  );
Route::resource('/jakarta2b', Jakarta2bController::class  );
Route::resource('/jakarta2c', Jakarta2cController::class  );
Route::resource('/jakarta2d', Jakarta2dController::class  );
Route::resource('/jakarta3a', Jakarta3aController::class  );
Route::resource('/jakarta3b', Jakarta3bController::class  );
Route::resource('/jakarta4a', Jakarta4aController::class  );
Route::resource('/jakarta5a', Jakarta5aController::class  );
Route::resource('/jakarta5b', Jakarta5bController::class  );
Route::resource('/jakarta5c', Jakarta5cController::class  );
Route::resource('/jakarta5d', Jakarta5dController::class  );
Route::resource('/jakarta5e', Jakarta5eController::class  );
Route::resource('/makasar1a', Makasar1aController::class  );
Route::resource('/makasar1b', Makasar1bController::class  );
Route::resource('/makasar2a', Makasar2aController::class  );
Route::resource('/makasar2b', Makasar2bController::class  );
Route::resource('/makasar2c', Makasar2cController::class  );
Route::resource('/makasar2d', Makasar2dController::class  );
Route::resource('/makasar3a', Makasar3aController::class  );
Route::resource('/makasar3b', Makasar3bController::class  );
Route::resource('/makasar4a', Makasar4aController::class  );
Route::resource('/makasar5a', Makasar5aController::class  );
Route::resource('/makasar5b', Makasar5bController::class  );
Route::resource('/makasar5c', Makasar5cController::class  );
Route::resource('/makasar5d', Makasar5dController::class  );
Route::resource('/makasar5e', Makasar5eController::class  );
Route::resource('/padang1a', Padang1aController::class  );
Route::resource('/padang1b', Padang1bController::class  );
Route::resource('/padang2a', Padang2aController::class  );
Route::resource('/padang2b', Padang2bController::class  );
Route::resource('/padang2c', Padang2cController::class  );
Route::resource('/padang2d', Padang2dController::class  );
Route::resource('/padang3a', Padang3aController::class  );
Route::resource('/padang3b', Padang3bController::class  );
Route::resource('/padang4a', Padang4aController::class  );
Route::resource('/padang5a', Padang5aController::class  );
Route::resource('/padang5b', Padang5bController::class  );
Route::resource('/padang5c', Padang5cController::class  );
Route::resource('/padang5d', Padang5dController::class  );
Route::resource('/padang5e', Padang5eController::class  );
Route::resource('/palembang1a', Palembang1aController::class  );
Route::resource('/palembang1b', Palembang1bController::class  );
Route::resource('/palembang2a', Palembang2aController::class  );
Route::resource('/palembang2b', Palembang2bController::class  );
Route::resource('/palembang2c', Palembang2cController::class  );
Route::resource('/palembang2d', Palembang2dController::class  );
Route::resource('/palembang3a', Palembang3aController::class  );
Route::resource('/palembang3b', Palembang3bController::class  );
Route::resource('/palembang4a', Palembang4aController::class  );
Route::resource('/palembang5a', Palembang5aController::class  );
Route::resource('/palembang5b', Palembang5bController::class  );
Route::resource('/palembang5c', Palembang5cController::class  );
Route::resource('/palembang5d', Palembang5dController::class  );
Route::resource('/palembang5e', Palembang5eController::class  );
Route::resource('/pandaan1a', Pandaan1aController::class  );
Route::resource('/pandaan1b', Pandaan1bController::class  );
Route::resource('/pandaan2a', Pandaan2aController::class  );
Route::resource('/pandaan2b', Pandaan2bController::class  );
Route::resource('/pandaan2c', Pandaan2cController::class  );
Route::resource('/pandaan2d', Pandaan2dController::class  );
Route::resource('/pandaan3a', Pandaan3aController::class  );
Route::resource('/pandaan3b', Pandaan3bController::class  );
Route::resource('/pandaan4a', Pandaan4aController::class  );
Route::resource('/pandaan5a', Pandaan5aController::class  );
Route::resource('/pandaan5b', Pandaan5bController::class  );
Route::resource('/pandaan5c', Pandaan5cController::class  );
Route::resource('/pandaan5d', Pandaan5dController::class  );
Route::resource('/pandaan5e', Pandaan5eController::class  );
Route::resource('/semar1a', Semarang1aController::class  );
Route::resource('/semar1b', Semarang1bController::class  );
Route::resource('/semar2a', Semarang2aController::class  );
Route::resource('/semar2b', Semarang2bController::class  );
Route::resource('/semar2c', Semarang2cController::class  );
Route::resource('/semar2d', Semarang2dController::class  );
Route::resource('/semar3a', Semarang3aController::class  );
Route::resource('/semar3b', Semarang3bController::class  );
Route::resource('/semar4a', Semarang4aController::class  );
Route::resource('/semar5a', Semarang5aController::class  );
Route::resource('/semar5b', Semarang5bController::class  );
Route::resource('/semar5c', Semarang5cController::class  );
Route::resource('/semar5d', Semarang5dController::class  );
Route::resource('/semar5e', Semarang5eController::class  );
Route::resource('/sura1a', Suralaya1aController::class  );
Route::resource('/sura1b', Suralaya1bController::class  );
Route::resource('/sura2a', Suralaya2aController::class  );
Route::resource('/sura2b', Suralaya2bController::class  );
Route::resource('/sura2c', Suralaya2cController::class  );
Route::resource('/sura2d', Suralaya2dController::class  );
Route::resource('/sura3a', Suralaya3aController::class  );
Route::resource('/sura3b', Suralaya3bController::class  );
Route::resource('/sura4a', Suralaya4aController::class  );
Route::resource('/sura5a', Suralaya5aController::class  );
Route::resource('/sura5b', Suralaya5bController::class  );
Route::resource('/sura5c', Suralaya5cController::class  );
Route::resource('/sura5d', Suralaya5dController::class  );
Route::resource('/sura5e', Suralaya5eController::class  );
Route::resource('/tun1a', Tuntungan1aController::class  );
Route::resource('/tun1b', Tuntungan1bController::class  );
Route::resource('/tun2a', Tuntungan2aController::class  );
Route::resource('/tun2b', Tuntungan2bController::class  );
Route::resource('/tun2c', Tuntungan2cController::class  );
Route::resource('/tun2d', Tuntungan2dController::class  );
Route::resource('/tun3a', Tuntungan3aController::class  );
Route::resource('/tun3b', Tuntungan3bController::class  );
Route::resource('/tun4a', Tuntungan4aController::class  );
Route::resource('/tun5a', Tuntungan5aController::class  );
Route::resource('/tun5b', Tuntungan5bController::class  );
Route::resource('/tun5c', Tuntungan5cController::class  );
Route::resource('/tun5e', Tuntungan5eController::class  );
Route::resource('/bogor6a', Bogor6aController::class  );
Route::resource('/bogor7a', Bogor7aController::class  );
Route::resource('/bogor7b', Bogor7bController::class  );
Route::resource('/bogor7c', Bogor7cController::class  );
Route::resource('/bogor8a', Bogor8aController::class  );
Route::resource('/bogor9a', Bogor9aController::class  );
Route::resource('/banjar6a', Banjar6aController::class  );
Route::resource('/banjar7a', Banjar7aController::class  );
Route::resource('/banjar7b', Banjar7bController::class  );
Route::resource('/banjar7c', Banjar7cController::class  );
Route::resource('/banjar8a', Banjar8aController::class  );
Route::resource('/banjar9a', Banjar9aController::class  );
Route::resource('/jakarta6a', Jakarta6aController::class  );
Route::resource('/jakarta7a', Jakarta7aController::class  );
Route::resource('/jakarta7b', Jakarta7bController::class  );
Route::resource('/jakarta7c', Jakarta7cController::class  );
Route::resource('/jakarta8a', Jakarta8aController::class  );
Route::resource('/jakarta9a', Jakarta9aController::class  );
Route::resource('/kantor6a', Kantor6aController::class  );
Route::resource('/kantor7a', Kantor7aController::class  );
Route::resource('/kantor7b', Kantor7Cbontroller::class  );
Route::resource('/kantor7c', Kantor7Cocntroller::class  );
Route::resource('/kantor8a', Kantor8aController::class  );
Route::resource('/kantor9a', Kantor9aController::class  );
Route::resource('/makasar6a', Makasar6aController::class  );
Route::resource('/makasar7a', Makasar7aController::class  );
Route::resource('/makasar7b', Makasar7bController::class  );
Route::resource('/makasar7c', Makasar7cController::class  );
Route::resource('/makasar8a', Makasar8aController::class  );
Route::resource('/makasar9a', Makasar9aController::class  );
Route::resource('/padang6a', Padang6aController::class  );
Route::resource('/padang7a', Padang7aController::class  );
Route::resource('/padang7b', Padang7bController::class  );
Route::resource('/padang7c', Padang7cController::class  );
Route::resource('/padang8a', Padang8aController::class  );
Route::resource('/padang9a', Padang9aController::class  );
Route::resource('/palembang6a', Palembang6aController::class  );
Route::resource('/palembang7a', Palembang7aController::class  );
Route::resource('/palembang7b', Palembang7bController::class  );
Route::resource('/palembang7c', Palembang7cController::class  );
Route::resource('/palembang8a', Palembang8aController::class  );
Route::resource('/palembang9a', Palembang9aController::class  );
Route::resource('/pandaan6a', Pandaan6aController::class  );
Route::resource('/pandaan7a', Pandaan7aController::class  );
Route::resource('/pandaan7b', Pandaan7bController::class  );
Route::resource('/pandaan7c', Pandaan7cController::class  );
Route::resource('/pandaan8a', Pandaan8aController::class  );
Route::resource('/pandaan9a', Pandaan9aController::class  );
Route::resource('/semar6a', Semarang6aController::class  );
Route::resource('/semar7a', Semarang7aController::class  );
Route::resource('/semar7b', Semarang7bController::class  );
Route::resource('/semar7c', Semarang7cController::class  );
Route::resource('/semar8a', Semarang8aController::class  );
Route::resource('/semar9a', Semarang9aController::class  );
Route::resource('/sura6a', Suralaya6aController::class  );
Route::resource('/sura7a', Suralaya7aController::class  );
Route::resource('/sura7b', Suralaya7bController::class  );
Route::resource('/sura7c', Suralaya7cController::class  );
Route::resource('/sura8a', Suralaya8aController::class  );
Route::resource('/sura9a', Suralaya9aController::class  );
Route::resource('/tun6a', Tuntungan6aController::class  );
Route::resource('/tun7a', Tuntungan7aController::class  );
Route::resource('/tun7b', Tuntungan7bController::class  );
Route::resource('/tun7c', Tuntungan7cController::class  );
Route::resource('/tun8a', Tuntungan8aController::class  );
Route::resource('/tun9a', Tuntungan9aController::class  );

//tte bogor p1a
Route::get('/ttebogor1a2', [TtebogorController::class, 'tw2'])->name('ttebogor1a2');
Route::get('/ttebogor1a1', [TtebogorController::class, 'index'])->name('ttebogor1a1');
Route::get('/ttebogor1a3', [TtebogorController::class, 'tw3'])->name('ttebogor1a3');
Route::get('/ttebogor1a4', [TtebogorController::class, 'tw4'])->name('ttebogor1a3');

//tte bogor p1b
Route::get('/ttebogor1b1', [TtebogorController::class, 'tw11b'])->name('ttebogor1b1');
Route::get('/ttebogor1b2', [TtebogorController::class, 'tw21b'])->name('ttebogor1b2');
Route::get('/ttebogor1b3', [TtebogorController::class, 'tw31b'])->name('ttebogor1b3');
Route::get('/ttebogor1b4', [TtebogorController::class, 'tw41b'])->name('ttebogor1b4');

//tte bogor p2a
Route::get('/ttebogor2a1', [TtebogorController::class, 'tw12a'])->name('ttebogor2a1');
Route::get('/ttebogor2a2', [TtebogorController::class, 'tw22a'])->name('ttebogor2a2');
Route::get('/ttebogor2a3', [TtebogorController::class, 'tw32a'])->name('ttebogor2a3');
Route::get('/ttebogor2a4', [TtebogorController::class, 'tw42a'])->name('ttebogor2a4');
// AHKIR LINGKUNGAN


