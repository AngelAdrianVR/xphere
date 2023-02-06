<?php

use App\Http\Controllers\ExternalServicesController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FavoriteGuestController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\InternalServicesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReservationFacilityController;
use App\Http\Controllers\ResidentPermissionController;
use App\Http\Controllers\SuggestionController;
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
        $user = auth()->user();
        return Inertia::render('Dashboard', compact('sphere','user'));
    })->name('dashboard');
});

// ---------------------------------- USER ROUTES ---------------------------------------
//Neighborhood routes
Route::resource('neighborhood', PostController::class)->middleware('auth');

//Guest routes
Route::resource('guest',GuestController::class);
Route::resource('favorite-guests',FavoriteGuestController::class);
Route::post('favorite-guests-program', [FavoriteGuestController::class, 'programGuest'])->name('favorite-guests.program-guest');
Route::get('/guest/events',[GuestController::class, 'event'])->name('guest.events');

//Payment routes
Route::resource('payments',PaymentController::class);
Route::get('/payments-history',[PaymentController::class, 'historyPayment'])->name('payments.history');

//Reservation Facilities routes
Route::resource('reservation-facilities',ReservationFacilityController::class);

//Services routes
Route::resource('internal-services',InternalServicesController::class);
Route::resource('external-services',ExternalServicesController::class);

//General and intern stuffs routes
Route::resource('general', GeneralController::class);
Route::get('/general-documents', [GeneralController::class,'documents'])->name('general.documents');
Route::get('/general-guard-house-chat', [GeneralController::class,'guardHouseChat'])->name('general.guard-house-chat');
Route::get('/general-report-incident', [GeneralController::class,'reportIncident'])->name('general.report-incident');
Route::get('/general-surveys', [GeneralController::class,'surveys'])->name('general.surveys');
Route::get('/general-permissions', [GeneralController::class,'permissions'])->name('general.permissions');
Route::get('/general-suggestions', [GeneralController::class,'suggestions'])->name('general.suggestions');

//Incidents routes
Route::resource('incidents', IncidentController::class);

//Resident permissions routes
Route::resource('resident-permissions', ResidentPermissionController::class);

//Suggestions routes
Route::resource('suggestions', SuggestionController::class);


//---------------------------------------------------------------------------------------------


// Route::resource('facilities',FacilityController::class);
