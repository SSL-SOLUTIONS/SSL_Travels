<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\InternationalController;
use App\Http\Controllers\InternationalpackagesController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\LocalPackageController;
use App\Http\Controllers\VacationController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('local',[WebsiteController::class, 'local'])->name('local');
Route::get('/localdetails/{id}',[WebsiteController::class,'localdetails'])->name('localdetails');
Route::get('international',[WebsiteController::class, 'international'])->name('international');
Route::get('/international/{id}/packages', [WebsiteController::class, 'intpackages'])->name('intpackages');
Route::get('transport', [WebsiteController::class, 'transport'])->name('transport');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('activities', [WebsiteController::class, 'activities'])->name('activities');
Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::resource('locals', LocalController::class);
Route::resource('internationals', InternationalController::class);
Route::resource('internationalspackages',InternationalpackagesController::class);
Route::resource('localpackages',LocalPackageController::class);
















