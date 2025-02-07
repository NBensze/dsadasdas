<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function ()
{
   Route::get('/destination', [DestinationController::class, 'index'])->name('destination.index');
   Route::get('/destination/show/{id}', [DestinationController::class, 'show'])->name('destination.show');
});

//Route::get('reservation', [ReservationController::class, 'index'])->middle ->name('reservation.index')

require __DIR__.'/auth.php';
