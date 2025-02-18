<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [FilmController::class, 'home'])->name('home');
Route::get('/film/{film}', [FilmController::class, 'show'])->name('film.show');

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::prefix('admin')->middleware(['auth', 'verified', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('genres', GenreController::class);
    Route::resource('films', FilmController::class)->except('show');
    Route::resource('casts', CastController::class);
    Route::resource('actors', ActorController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/photo', [ProfileController::class, 'profileUpdate'])->name('profile.photo.update');
    Route::post('/film/{film}/review', [ReviewController::class, 'store'])->name('review.store');
});

require __DIR__ . '/auth.php';
