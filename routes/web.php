<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\PelangganAdminController;
use App\Http\Controllers\Admin\BengkelAdminController;
use App\Http\Controllers\Admin\LayananAdminController;
use App\Http\Controllers\Admin\BookingAdminController;

/*
|--------------------------------------------------------------------------
| PUBLIC (USER)
|--------------------------------------------------------------------------
*/

Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/about', fn() => view('user.about'));

Route::get('/service', [UserController::class, 'service'])->name('user.service');
Route::get('/pelanggan', [UserController::class, 'pelanggan'])->name('user.pelanggan');
Route::get('/testimonial', [UserController::class, 'testimonial'])->name('user.testimonial');

/*
|--------------------------------------------------------------------------
| USER (WAJIB LOGIN)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // BOOKING
    Route::get('/booking/{layanan}', [BookingController::class, 'create'])
        ->name('booking.create');

    Route::post('/booking', [BookingController::class, 'store'])
        ->name('booking.store');

    Route::get('/booking-saya', [BookingController::class, 'index'])
        ->name('booking.saya');

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', fn() => redirect()->route('admin.dashboard'));

        Route::get('/dashboard', [DashboardAdminController::class, 'index'])
            ->name('dashboard');

        Route::resource('bengkel', BengkelAdminController::class);
        Route::resource('layanan', LayananAdminController::class);
        Route::resource('pelanggan', PelangganAdminController::class);
        Route::get('/booking', [BookingAdminController::class, 'index'])
            ->name('booking.index');

        Route::post('/booking/{booking}/status', [BookingAdminController::class, 'updateStatus'])
            ->name('booking.status');
    });

require __DIR__.'/auth.php';
