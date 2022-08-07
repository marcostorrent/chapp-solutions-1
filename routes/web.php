<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ReservationController::class, 'index'])->name('home');



Route::get('/reservas/crear', [ReservationController::class, 'new']);

Route::post('/reservas/crear/paso2', [ReservationController::class, 'newStep2']);

Route::post('/reservas/crear/paso3', [ReservationController::class, 'newStep3']);

Route::post('/reservas/crear/paso4', [ReservationController::class, 'newStep4']);

