<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('admin/profile', function () {
    return view('profile.profile');
})->name('admin.profile');


Route::prefix('admin')->middleware(['auth', 'verified', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('genres', GenreController::class);
    Route::resource('films', FilmController::class);
    Route::resource('casts', CastController::class);
    Route::resource('actors', ActorController::class);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
