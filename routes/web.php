<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchieveController;
use App\Http\Controllers\ApsController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\EventProposalController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ExecomController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MttsController;
use App\Http\Controllers\SightController;
use App\Http\Controllers\WieController;
use App\Mail\EventProposalMail;
use Illuminate\Support\Facades\Mail;

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

    // CsExecom

    Route::get('/computerexecom/list', [ComputerController::class, 'list'])->name('computerexecom.list');
    Route::get('/computerexecom/create', [ComputerController::class, 'create'])->name('computerexecom.create');
    Route::post('/computerexecom/store', [ComputerController::class, 'store'])->name('computerexecom.store');
    Route::get('/computerexecom/edit/{id}', [ComputerController::class, 'edit'])->name('computerexecom.edit');
    Route::post('/computerexecom/delete/{id}', [ComputerController::class, 'delete'])->name('computerexecom.delete');
    Route::post('/computerexecom/editsave', [ComputerController::class, 'editSave'])->name('computerexecom.editsave');

    //apsExecom
    Route::get('/apsexecom/list', [ApsController::class, 'list'])->name('apsexecom.list');
    Route::get('/apsexecom/create', [ApsController::class, 'create'])->name('apsexecom.create');
    Route::post('/apsexecom/store', [ApsController::class, 'store'])->name('apsexecom.store');
    Route::get('/apsexecom/edit/{id}', [ApsController::class, 'edit'])->name('apsexecom.edit');
    Route::post('/apsexecom/delete/{id}', [ApsController::class, 'delete'])->name('apsexecom.delete');
    Route::post('/apsexecom/editsave', [ApsController::class, 'editSave'])->name('apsexecom.editsave');

    // MttsController
    Route::get('/mttsexecom/list', [MttsController::class, 'list'])->name('mttsexecom.list');
    Route::get('/mttsexecom/create', [MttsController::class, 'create'])->name('mttsexecom.create');
    Route::post('/mttsexecom/store', [MttsController::class, 'store'])->name('mttsexecom.store');
    Route::get('/mttsexecom/edit/{id}', [MttsController::class, 'edit'])->name('mttsexecom.edit');
    Route::post('/mttsexecom/delete/{id}', [MttsController::class, 'delete'])->name('mttsexecom.delete');
    Route::post('/mttsexecom/editsave', [MttsController::class, 'editSave'])->name('mttsexecom.editsave');

    // SightController
    Route::get('/sightexecom/list', [SightController::class, 'list'])->name('sightexecom.list');
    Route::get('/sightexecom/create', [SightController::class, 'create'])->name('sightexecom.create');
    Route::post('/sightexecom/store', [SightController::class, 'store'])->name('sightexecom.store');
    Route::get('/sightexecom/edit/{id}', [SightController::class, 'edit'])->name('sightexecom.edit');
    Route::post('/sightexecom/delete/{id}', [SightController::class, 'delete'])->name('sightexecom.delete');
    Route::post('/sightexecom/editsave', [SightController::class, 'editSave'])->name('sightexecom.editsave');

    // WieExecom
    Route::get('/wie/execom/list', [WieController::class, 'list'])->name('wieexecom.list');
    Route::get('/wie/execom/create', [WieController::class, 'create'])->name('wieexecom.create');
    Route::post('/wie/execom/store', [WieController::class, 'store'])->name('wieexecom.store');
    Route::get('/wie/execom/edit/{id}', [WieController::class, 'edit'])->name('wieexecom.edit');
    Route::post('/wie/  execom/delete/{id}', [WieController::class, 'delete'])->name('wieexecom.delete');
    Route::post('/wie/execom/editsave', [WieController::class, 'editSave'])->name('wieexecom.editsave');

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
Route::get('/computer', [ComputerController::class, 'index'])->name('computer.index');
Route::get('/wie', [WieController::class, 'index'])->name('wie.index');
Route::get('/sight', [SightController::class, 'index'])->name('sight.index');
Route::get('/aps', [ApsController::class, 'index'])->name('aps.index');
Route::get('/mtts', [MttsController::class, 'index'])->name('mtts.index');
// societies end

//event_propasal
Route::get('/event-proposal', [EventProposalController::class, 'index'])->name('eventProposal.index');
Route::post('/event-sentmail', [EventProposalController::class, 'sentMail'])->name('eventProposal.sentmail');







require __DIR__ . '/auth.php';
