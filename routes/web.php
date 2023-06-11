<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(
    function () {
        Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
        Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
        Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
        Route::get('/reservation/{id}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
        Route::put('/reservation/{id}', [ReservationController::class, 'update'])->name('reservation.update');
        Route::delete('/reservation/{id}/destroy', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    }
);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
