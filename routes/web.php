<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\computerController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AchieveController;
use App\Http\Controllers\ExecomController;
use App\Http\Controllers\GalleryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class , 'index'])->name('home');
Route::get('/about-us',[AboutController::class, 'index' ])->name('about.us');
Route::get('/events',[EventsController::class, 'index' ])->name('events.list');
Route::get('/achievements',[AchieveController::class, 'index' ])->name('achievements');
Route::get('/computer',[computerController::class, 'index' ])->name('computer');
Route::get('/execom',[ExecomController::class, 'index'])->name('execom.list');
Route::get('/gallery',[GalleryController::class, 'index'])->name('gallery.list');
//njklnk 
//code added
