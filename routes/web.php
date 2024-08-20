<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EventController as EventManagementController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('event')->name('event.')->group(function () {
    Route::get('/', [EventManagementController::class, 'index'])
        ->name('index');
    Route::get('/create', [EventManagementController::class, 'create'])
        ->name('create');
    Route::post('/create', [EventManagementController::class, 'store'])
        ->name('store');
    Route::get('/{event}', [EventManagementController::class, 'show'])
        ->name('show');
    Route::get('/{event}/edit', [EventManagementController::class, 'edit'])
        ->name('edit');
    Route::put('/{event}/update', [EventManagementController::class, 'update'])
        ->name('update');
    Route::delete('/{event}/delete', [EventManagementController::class, 'delete'])
        ->name('delete');
});

require __DIR__.'/auth.php';
