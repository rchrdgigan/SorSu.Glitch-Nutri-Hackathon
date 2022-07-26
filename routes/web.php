<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/account-setting', [App\Http\Controllers\AccountController::class, 'index']);
Route::get('/mapping-crop-setting', [App\Http\Controllers\CropMappingController::class, 'index']);
Route::get('/import-zscore', [App\Http\Controllers\ZscoreController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::get('/register', function(){
        $barangays = array('Barcelona','Bulan','Bulusan','Casiguran','Castilla','Donsol','Gubat','Irosin','Juban','Magallanes','Matnog','Pilar','Prieto Diaz','Santa Magdalena','Sorsogon City');
        return view('auth.register', compact('barangays'));
    })->name('register');
});
