<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'admin'])->name('admin.dashboard');

    Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event.index');
    Route::get('/event/create', [App\Http\Controllers\EventController::class, 'create'])->name('event.create');
    Route::post('/event', [App\Http\Controllers\EventController::class, 'store'])->name('event.store');
    Route::get('/event/{event}', [App\Http\Controllers\EventController::class, 'show'])->name('event.show');
    Route::get('/event/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('event.edit');
    Route::post('/event/{event}', [App\Http\Controllers\EventController::class, 'update'])->name('event.update');
    Route::delete('/events/{event}', [App\Http\Controllers\EventController::class, 'destroy'])->name('events.destroy');
});

Route::group(['prefix' => 'peserta', 'middleware' => ['auth', 'checkRole:peserta']], function () {
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'peserta'])->name('peserta.dashboard');
});

Route::group(['prefix' => 'client', 'middleware' => ['auth', 'checkRole:client']], function () {
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'client'])->name('client.dashboard');
});
