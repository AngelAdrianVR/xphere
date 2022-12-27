<?php


use App\Models\Post;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationFacilityController;
use App\Models\Sphere;
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

Route::resource('post', UserController::class)->middleware('auth')->except('show');

//Guests routes (resource)
Route::resource('guest',GuestController::class)->except('show');

//Payments routes (resource)
Route::resource('payments',PaymentController::class);

Route::get('neighborhood', function() {
    $posts = Post::whereHas('user', function($query) {
        $query->where('sphere_id', auth()->user()->sphere_id);
    })->paginate(15);

    return inertia('Neighborhood/Index', compact('posts'));
})->middleware('auth')->name('neighborhood.index');

//Facilities Reservation routes (resource)
Route::get('/reservation-facilities',[ReservationFacilityController::class, 'index'])
        ->name('reservation-facilities.index');
