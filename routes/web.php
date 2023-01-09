<?php

use App\Http\Controllers\Home\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

//About Us
Route::get('/organogram', [HomeController::class, 'organogram'])->name('organogram');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact-store',[HomeController::class,'contactStore'])->name('contactStore');
Route::get('/vision-mission', [HomeController::class, 'visionMission'])->name('visionMission');

//Governance
Route::get('/vice-chancellor', [HomeController::class, 'viceChancellor'])->name('viceChancellor');
Route::get('/pro-vice-chancellor', [HomeController::class, 'proViceChancellor'])->name('proViceChancellor');
Route::get('/registrar', [HomeController::class, 'registrar'])->name('registrar');
Route::get('/director', [HomeController::class, 'director'])->name('director');
Route::get('/head', [HomeController::class, 'head'])->name('head');

Route::get('/programmes', [HomeController::class, 'programmes'])->name('programmes');
Route::get('/faculties', [HomeController::class, 'faculty'])->name('faculty');
