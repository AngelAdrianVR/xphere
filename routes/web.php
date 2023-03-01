<?php

use App\Http\Controllers\ComentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
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
use App\Http\Controllers\SuscruptionController;
use App\Http\Resources\GuestResource;
use App\Http\Resources\PaymentResource;
use App\Models\Guest;
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
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
});

// ---------------------------------- USER ROUTES ---------------------------------------
//Neighborhood routes
Route::resource('neighborhood', PostController::class)->middleware('auth')->parameters(['neighborhood' => 'post']);
Route::post('post/comment', [ComentController::class, 'store'])->middleware('auth')->name('comments.store');
Route::delete('post/comment/destroy/{coment}', [ComentController::class, 'destroy'])->middleware('auth')->name('comments.destroy');
//Guest routes
Route::resource('guest',GuestController::class)->middleware('auth');
Route::resource('favorite-guests',FavoriteGuestController::class)->middleware('auth');
Route::post('favorite-guests-program', [FavoriteGuestController::class, 'programGuest'])->name('favorite-guests.program-guest')->middleware('auth');
Route::resource('guest-events',EventController::class)->middleware('auth');

//Payment routes
Route::resource('payments',PaymentController::class)->middleware('auth');
Route::get('/payments-history',[PaymentController::class, 'historyPayment'])->name('payments.history')->middleware('auth');

//Reservation Facilities routes
Route::resource('reservation-facilities',ReservationFacilityController::class)->middleware('auth');

//Services routes
Route::resource('internal-services',InternalServicesController::class)->middleware('auth');
Route::resource('external-services',ExternalServicesController::class)->middleware('auth');

//General and intern stuffs routes
Route::resource('general', GeneralController::class)->middleware('auth');
Route::get('/general-documents', [GeneralController::class,'documents'])->name('general.documents')->middleware('auth');
Route::get('/general-guard-house-chat', [GeneralController::class,'guardHouseChat'])->name('general.guard-house-chat')->middleware('auth');
Route::get('/general-report-incident', [GeneralController::class,'reportIncident'])->name('general.report-incident')->middleware('auth');
Route::get('/general-surveys', [GeneralController::class,'surveys'])->name('general.surveys')->middleware('auth');
Route::get('/general-permissions', [GeneralController::class,'permissions'])->name('general.permissions')->middleware('auth');
Route::get('/general-suggestions', [GeneralController::class,'suggestions'])->name('general.suggestions')->middleware('auth');

//Incidents routes
Route::resource('incidents', IncidentController::class)->middleware('auth');

//Resident permissions routes
Route::resource('resident-permissions', ResidentPermissionController::class)->middleware('auth');

//Suggestions routes
Route::resource('suggestions', SuggestionController::class)->middleware('auth');

//Suscriptions routes
Route::resource('suscriptions', SuscruptionController::class)->middleware('auth');


//------------------------------------ADMIN ROUTES-----------------------------------------------------------------------


// Route::resource('facilities',FacilityController::class);
