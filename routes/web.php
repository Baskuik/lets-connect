<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\WorkshopRegistrationController;

Route::post('/register', [WorkshopRegistrationController::class, 'store']);

Route::post('/register', [WorkshopController::class, 'store']);

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/register1', function() {
    return view('register1');
});

Route::get('/Workshop1', function() {
    return view('Workshop1');
});

Route::get('/Workshop2', function() {
    return view('Workshop2');
});

Route::get('/Workshop3', function() {
    return view('Workshop3');
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
