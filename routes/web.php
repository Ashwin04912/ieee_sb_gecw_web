<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchieveController;
use App\Http\Controllers\ApsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ExecomController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MttsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SightController;
use App\Http\Controllers\WieController;

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

    // Gallery
    // Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/list', [GalleryController::class, 'list'])->name('gallery.list');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');
    Route::post('/gallery/editsave', [GalleryController::class, 'editSave'])->name('gallery.editsave');

    Route::get('/achievements/list', [AchieveController::class, 'list'])->name('achievements.list');
    Route::get('/achievements/create', [AchieveController::class, 'create'])->name('achievements.create');
    Route::post('/achievements/store', [AchieveController::class, 'store'])->name('achievements.store');
    Route::get('/achievements/edit/{id}', [AchieveController::class, 'edit'])->name('achievements.edit');
    Route::post('/achievements/delete/{id}', [AchieveController::class, 'delete'])->name('achievements.delete');
    Route::post('/achievements/editsave', [AchieveController::class, 'editSave'])->name('achievements.editsave');

});


// Landing page routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about.us');
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/achievements', [AchieveController::class, 'index'])->name('achievements');
Route::get('/execom', [ExecomController::class, 'index'])->name('execom.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
// societies
Route::get('/computer', [ComputerController::class, 'index'])->name('computer');
Route::get('/wie', [WieController::class, 'index'])->name('wie.index');
Route::get('/sight', [SightController::class, 'index'])->name('sight.index');
Route::get('/aps', [ApsController::class, 'index'])->name('aps.index');
Route::get('/mtts', [MttsController::class, 'index'])->name('mtts.index');
// societies end


require __DIR__ . '/auth.php';
