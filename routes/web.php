<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchieveController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\computerController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ExecomController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//admin page routes

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin_home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/events/create', [EventsController::class, 'create'])->name('events.create');
});



// landing page routes

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about.us');
Route::get('/events', [EventsController::class, 'index'])->name('events.list');
Route::get('/achievements', [AchieveController::class, 'index'])->name('achievements');
Route::get('/computer', [computerController::class, 'index'])->name('computer');
Route::get('/execom', [ExecomController::class, 'index'])->name('execom.list');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.list');









require __DIR__.'/auth.php';
