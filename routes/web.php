<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchieveController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ExecomController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

// Admin page routes
Route::get('/admin', function () {
    return view('auth.login');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('admin_home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Events
    Route::get('/events/list', [EventsController::class, 'list'])->name('events.list');
    Route::get('/events/create', [EventsController::class, 'create'])->name('events.create');
    Route::post('/events/store', [EventsController::class, 'store'])->name('events.store');
    Route::post('/events/edit/{id}', [EventsController::class, 'edit'])->name('events.edit');
    Route::post('/events/delete/{id}', [EventsController::class, 'delete'])->name('events.delete');
    Route::post('/events/editsave', [EventsController::class, 'editSave'])->name('events.editsave');

    // Execom
    Route::get('/execom/list', [ExecomController::class, 'list'])->name('execom.list');
    Route::get('/execom/create', [ExecomController::class, 'create'])->name('execom.create');
    Route::post('/execom/store', [ExecomController::class, 'store'])->name('execom.store');
    Route::get('/execom/edit/{id}', [ExecomController::class, 'edit'])->name('execom.edit');
    Route::post('/execom/delete/{id}', [ExecomController::class, 'delete'])->name('execom.delete');
    Route::post('/execom/editsave', [ExecomController::class, 'editSave'])->name('execom.editsave');
});

// Landing page routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about.us');
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/achievements', [AchieveController::class, 'index'])->name('achievements');
Route::get('/computer', [ComputerController::class, 'index'])->name('computer');
Route::get('/execom', [ExecomController::class, 'index'])->name('execom.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.list');

require __DIR__ . '/auth.php';
