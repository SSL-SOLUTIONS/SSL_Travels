<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\InternationalController;
use App\Http\Controllers\InternationalpackagesController;
use App\Http\Controllers\LocalController;
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
Route::get('/internationalpackages{id}',[WebsiteController::class, 'internationalpackages'])->name('internationalpackages');


Route::get('/internationalpackages/{id}', [InternationalController::class, 'show'])
    ->name('internationalpackages.show');

Route::get('transport', [WebsiteController::class, 'transport'])->name('transport');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('activities', [WebsiteController::class, 'activities'])->name('activities');
Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::resource('locals', LocalController::class);
Route::resource('internationals', InternationalController::class);


Route::get('australia',[CountriesController::class,'australia'])->name('australia');
Route::get('azarbaijan',[CountriesController::class,'azarbaijan'])->name('azarbaijan');
Route::get('cyprus',[CountriesController::class,'cyprus'])->name('cyprus');
Route::get('czech',[CountriesController::class,'czech'])->name('czech');
Route::get('denmark',[CountriesController::class,'denmark'])->name('denmark');
Route::get('egypt',[CountriesController::class,'egypt'])->name('egypt');
Route::get('france',[CountriesController::class,'france'])->name('france');
Route::get('francedetails',[CountriesController::class,'francedetails'])->name('francedetails');
Route::get('francedetails2',[CountriesController::class,'francedetails2'])->name('francedetails2');
Route::get('francedetails3',[CountriesController::class,'francedetails3'])->name('francedetails3');
Route::get('francedetails4',[CountriesController::class,'francedetails4'])->name('francedetails4');
Route::get('germany',[CountriesController::class,'germany'])->name('germany');
Route::get('germanydetails',[CountriesController::class,'germanydetails'])->name('germanydetails');
Route::get('francedetails2',[CountriesController::class,'francedetails2'])->name('francedetails2');
Route::get('germanydetails3',[CountriesController::class,'germanydetails3'])->name('germanydetails3');



Route::get('greece',[CountriesController::class,'greece'])->name('greece');
Route::get('greecedetails',[CountriesController::class,'greecedetails'])->name('greecedetails');
Route::get('greecedetails3',[CountriesController::class,'greecedetails3'])->name('greecedetails3');
Route::get('greecedetails4',[CountriesController::class,'greecedetails4'])->name('greecedetails4');




Route::get('indonesia',[CountriesController::class,'indonesia'])->name('indonesia');
Route::get('indonesiadetails',[CountriesController::class,'indonesiadetails'])->name('indonesiadetails');
Route::get('indonesiadetails2',[CountriesController::class,'indonesiadetails2'])->name('indonesiadetails2');



Route::get('italy',[CountriesController::class,'italy'])->name('italy');
Route::get('italydetails',[CountriesController::class,'italydetails'])->name('italydetails');
Route::get('italydetails2',[CountriesController::class,'italydetails2'])->name('italydetails2');
Route::get('italydetails3',[CountriesController::class,'italydetails3'])->name('italydetails3');
Route::get('italydetails4',[CountriesController::class,'italydetails4'])->name('italydetails4');



Route::get('malaysia',[CountriesController::class,'malaysia'])->name('malaysia');
Route::get('malaysiadetails',[CountriesController::class,'malaysiadetails'])->name('malaysiadetails');
Route::get('malaysiadetails2',[CountriesController::class,'malaysiadetails2'])->name('malaysiadetails2');
Route::get('malaysiadetails3',[CountriesController::class,'malaysiadetails3'])->name('malaysiadetails3');
Route::get('maldives',[CountriesController::class,'maldives'])->name('maldives');
Route::get('maldivesdetails',[CountriesController::class,'maldivesdetails'])->name('maldivesdetails');
Route::get('maldivesdetails2',[CountriesController::class,'maldivesdetails2'])->name('maldivesdetails2');
Route::get('maldivesdetails3',[CountriesController::class,'maldivesdetails3'])->name('maldivesdetails3');
Route::get('maldivesdetails4',[CountriesController::class,'maldivesdetails4'])->name('maldivesdetails4');
Route::get('maldivesdetails5',[CountriesController::class,'maldivesdetails5'])->name('maldivesdetails5');
Route::get('maldivesdetails6',[CountriesController::class,'maldivesdetails6'])->name('maldivesdetails6');
Route::get('maldivesdetails7',[CountriesController::class,'maldivesdetails7'])->name('maldivesdetails7');
Route::get('maldivesdetails8',[CountriesController::class,'maldivesdetails8'])->name('maldivesdetails8');
Route::get('maldivesdetails9',[CountriesController::class,'maldivesdetails9'])->name('maldivesdetails9');
Route::get('maldivesdetails10',[CountriesController::class,'maldivesdetails10'])->name('maldivesdetails10');
Route::get('maldivesdetails11',[CountriesController::class,'maldivesdetails11'])->name('maldivesdetails11');
Route::get('maldivesdetails12',[CountriesController::class,'maldivesdetails12'])->name('maldivesdetails12');
Route::get('maldivesdetails13',[CountriesController::class,'maldivesdetails13'])->name('maldivesdetails13');
Route::get('maldivesdetails14',[CountriesController::class,'maldivesdetails14'])->name('maldivesdetails14');
Route::get('maldivesdetails15',[CountriesController::class,'maldivesdetails15'])->name('maldivesdetails15');
Route::get('maldivesdetails16',[CountriesController::class,'maldivesdetails16'])->name('maldivesdetails16');
Route::get('maldivesdetails17',[CountriesController::class,'maldivesdetails17'])->name('maldivesdetails17');


Route::get('saudiarabia',[CountriesController::class,'saudiarabia'])->name('saudiarabia');
Route::get('saudiarabiadetails',[CountriesController::class,'saudiarabiadetails'])->name('saudiarabiadetails');
Route::get('saudiarabiadetails2',[CountriesController::class,'saudiarabiadetails2'])->name('saudiarabiadetails2');

Route::get('southafrica',[CountriesController::class,'southafrica'])->name('southafrica');
Route::get('southafricadetails',[CountriesController::class,'southafricadetails'])->name('southafricadetails');


Route::get('spain',[CountriesController::class,'spain'])->name('spain');
Route::get('spaindetails',[CountriesController::class,'spaindetails'])->name('spaindetails');
Route::get('spaindetails2',[CountriesController::class,'spaindetails2'])->name('spaindetails2');
Route::get('spaindetails3',[CountriesController::class,'spaindetails3'])->name('spaindetails3');
Route::get('spaindetails4',[CountriesController::class,'spaindetails4'])->name('spaindetails4');



Route::get('srilanka',[CountriesController::class,'srilanka'])->name('srilanka');
Route::get('srilankadetails',[CountriesController::class,'srilankadetails'])->name('srilankadetails');
Route::get('srilankadetails2',[CountriesController::class,'srilankadetails2'])->name('srilankadetails2');
Route::get('srilankadetails3',[CountriesController::class,'srilankadetails3'])->name('srilankadetails3');














