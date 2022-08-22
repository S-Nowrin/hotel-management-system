<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(["prefix" => 'dashboard','middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    Route::group(["prefix" => 'booking'], function () {
        Route::get('/', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
        Route::get('/add', [App\Http\Controllers\BookingController::class, 'create'])->name('booking.create')->middleware('admin');
        Route::post('/add', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store')->middleware('admin');
    });

    Route::group(["prefix" => 'room'], function () {
        Route::get('/', [App\Http\Controllers\RoomController::class, 'index'])->name('room.index');
        Route::get('/add', [App\Http\Controllers\RoomController::class, 'create'])->name('room.create')->middleware('admin');
        Route::post('/add', [App\Http\Controllers\RoomController::class, 'store'])->name('room.store')->middleware('admin');
    });
    Route::group(["prefix" => 'employee'], function () {
        Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
        Route::get('/add', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create')->middleware('admin');
        Route::post('/add', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store')->middleware('admin');
    });
    Route::group(["prefix" => 'driver'], function () {
        Route::get('/', [App\Http\Controllers\DriverController::class, 'index'])->name('driver.index');
        Route::get('/add', [App\Http\Controllers\DriverController::class, 'create'])->name('driver.create')->middleware('admin');
        Route::post('/add', [App\Http\Controllers\DriverController::class, 'store'])->name('driver.store')->middleware('admin');
    });
    Route::group(["prefix" => 'car'], function () {
        Route::get('/', [App\Http\Controllers\CarController::class, 'index'])->name('car.index');
        Route::get('/add', [App\Http\Controllers\CarController::class, 'create'])->name('car.create')->middleware('admin');
        Route::post('/add', [App\Http\Controllers\CarController::class, 'store'])->name('car.store')->middleware('admin');
    });
});