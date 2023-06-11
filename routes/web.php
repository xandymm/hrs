<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
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
    return view('home');
});
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservation/{id}/edit',[reservationController::class,'edit'])->name('reservation.edit');

use App\Http\Controllers\RoomReservationController;

Route::get('reservations', [RoomReservationController::class, 'index']);
Route::get('reservations/create', [RoomReservationController::class, 'create']);
Route::post('reservations', [RoomReservationController::class, 'store']);
Route::get('reservations/{id}', [RoomReservationController::class, 'show']);
Route::get('reservations/{id}/edit', [RoomReservationController::class, 'edit']);
Route::put('reservations/{id}', [RoomReservationController::class, 'update']);
Route::delete('reservations/{id}', [RoomReservationController::class, 'destroy']);
