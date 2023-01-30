<?php

use App\Http\Controllers\ExternalServicesController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InternalServicesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReservationFacilityController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $sphere = auth()->user()->sphere;
        return Inertia::render('Dashboard', compact('sphere'));
    })->name('dashboard');
});

// ---------------------------------- USER ROUTES ---------------------------------------
//Neighborhood routes
Route::resource('neighborhood', PostController::class)->middleware('auth');

//Guest routes
Route::resource('guest',GuestController::class)->except('show');
Route::get('/guest/favorites',[GuestController::class, 'favorite'])->name('guest.favorite');
Route::get('/guest/favorites/create',[GuestController::class, 'createFavorite'])->name('guest.create-favorite');
Route::get('/guest/favorites/edit/{favorite_guest}',[GuestController::class, 'editFavorite'])->name('guest.edit-favorite');
Route::put('/guest/favorites/update',[GuestController::class, 'updateFavorite'])->name('guest.update-favorite');
Route::delete('/guest/favorites/delete',[GuestController::class, 'destroyFavorite'])->name('guest.delete-favorite');
Route::get('/guest/events',[GuestController::class, 'event'])->name('guest.events');
Route::post('/guest/favorites/store',[GuestController::class, 'storeFavorite'])->name('guest.store-favorite');

//Payment routes
Route::resource('payments',PaymentController::class);
Route::get('/payments-history',[PaymentController::class, 'historyPayment'])->name('payments.history');

//Reservation Facilities routes
Route::resource('reservation-facilities',ReservationFacilityController::class);

//Services routes
Route::resource('internal-services',InternalServicesController::class);
Route::resource('external-services',ExternalServicesController::class);

//General and intern stuffs
Route::resource('general', GeneralController::class);
Route::get('/general-documents', [GeneralController::class,'documents'])->name('general.documents');
Route::get('/general-guard-house-chat', [GeneralController::class,'guardHouseChat'])->name('general.guard-house-chat');
Route::get('/general-report-incident', [GeneralController::class,'reportIncident'])->name('general.report-incident');
Route::get('/general-surveys', [GeneralController::class,'surveys'])->name('general.surveys');
Route::get('/general-permissions', [GeneralController::class,'permissions'])->name('general.permissions');
Route::get('/general-suggestions', [GeneralController::class,'suggestions'])->name('general.suggestions');
//---------------------------------------------------------------------------------------------


// Route::resource('facilities',FacilityController::class);
