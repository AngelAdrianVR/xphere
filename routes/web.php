<?php


use App\Models\Post;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PaymentController;
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
        return Inertia::render('Dashboard');
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


