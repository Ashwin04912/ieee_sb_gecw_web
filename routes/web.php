<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\computerController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
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
Route::get('/events',[EventsController::class, 'index' ])->name('events');
Route::get('/computer',[computerController::class, 'index' ])->name('computer');