<?php

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
Route::get('vacations',[WebsiteController::class, 'vacations'])->name('vacations');
Route::get('destinations',[WebsiteController::class, 'destinations'])->name('destinations');
Route::get('transport', [WebsiteController::class, 'transport'])->name('transport');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('activities', [WebsiteController::class, 'activities'])->name('activities');

