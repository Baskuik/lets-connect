<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\WorkshopRegistrationController;

Route::post('/register', [WorkshopRegistrationController::class, 'store']);

Route::post('/register', [WorkshopController::class, 'store']);

Route::get('/', function () {
    return view('Workshop');
});


Route::get('/Workshop', function() {
    return view('Workshop');
});
Route::get('Workshopaanmelden', function() {
    return view('Workshopaanmelden');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
