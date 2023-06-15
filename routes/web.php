<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', fn() => view('welcome'));

// Guest
Route::group([
    'prefix' => 'guest',
    'as' => 'guest.',
], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Guest\BarangController::class, 'index'])->name('dashboard');
});

// Auth
Route::middleware(['auth'])->group(function () {

    // Default dashboard
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    // Admin
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => 'role:admin',
    ], function () {
        Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
        Route::resource('barangs', \App\Http\Controllers\Admin\BarangController::class);
    });

    // Staff
    Route::group([
        'prefix' => 'staff',
        'as' => 'staff.',
        'middleware' => 'role:staff',
    ], function () {
        Route::get('/dashboard', fn() => view('staff.dashboard'))->name('dashboard');
        Route::resource('barangs', \App\Http\Controllers\Staff\BarangController::class);
    });

    // Profile
    Route::group([
        'prefix' => 'profile',
        'as' => 'profile.',
    ], function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});

require __DIR__ . '/auth.php';
