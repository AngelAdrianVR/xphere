<?php

use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GuestController;
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

//User Routes
Route::resource('neighborhood', PostController::class)->middleware('auth');
Route::resource('guest',GuestController::class)->except('show');
Route::resource('payments',PaymentController::class);
Route::resource('reservation-facilities',ReservationFacilityController::class);

// Route::resource('facilities',FacilityController::class);
