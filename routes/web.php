<?php

use Illuminate\Support\Facades\Route;
use App\Models\Municipality;

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
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/posted-crops', function () {
    return view('posted-crop');
})->name('posted');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Auth::routes();
//Provicical auth
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/account-setting', [App\Http\Controllers\AccountController::class, 'index']);
Route::get('/import-zscore', [App\Http\Controllers\ZscoreController::class, 'index']);

Route::get('/dps/ongoing', [App\Http\Controllers\DspController::class, 'index'])->name('dsp.view');
Route::get('/dps/archive', [App\Http\Controllers\DspController::class, 'viewArchive'])->name('dsp.viewArchive');
Route::get('/dps/completed', [App\Http\Controllers\DspController::class, 'viewComplete'])->name('dsp.viewcomplete');
Route::post('/create/dsp',[App\Http\Controllers\DspController::class, 'create'])->name('dps.create');
Route::get('/edit/dsp/{id}',[App\Http\Controllers\DspController::class, 'edit'])->name('dps.edit');
Route::put('/udpate/dsp/{id}',[App\Http\Controllers\DspController::class, 'update'])->name('dps.update');
Route::get('/udpate/status/dsp/{id}/{status}',[App\Http\Controllers\DspController::class, 'updateStatus'])->name('dspstatus.update');

Route::get('/farmer/management', [App\Http\Controllers\FarmerController::class, 'index'])->name('farmer.view');
Route::post('/farmer/create', [App\Http\Controllers\FarmerController::class, 'create'])->name('farmer.create');
Route::get('/farmer/edit/{id}', [App\Http\Controllers\FarmerController::class, 'edit'])->name('farmer.edit');
Route::put('/farmer/update/{farm_id}/{product_id}',[App\Http\Controllers\FarmerController::class, 'update'])->name('farmer.update');

Route::get('/municipality', [App\Http\Controllers\MunicipalityController::class, 'index'])->name('municipality.view');
Route::get('/municipality/health/monitoring',[App\Http\Controllers\ClientHealthController::class, 'index'])->name('health.view');
Route::get('/municipality/dps/ongoing', [App\Http\Controllers\ClienDspController::class, 'index'])->name('municipaldsp.view');
Route::get('/municipality/farmer', [App\Http\Controllers\MunicipalFarmerController::class, 'index'])->name('municipalfarmer.view');

Route::middleware('auth')->group(function(){
    Route::get('/register', function(){
        $barangays = Municipality::get();
        return view('auth.register', compact('barangays'));
    })->name('register');
});
