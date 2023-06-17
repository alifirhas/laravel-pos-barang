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

// My CV
Route::prefix('cv')->as("cv.")->group(function () {
    Route::get('/', fn() => view('cv.index'))->name('index');
    Route::get('/project', fn() => view('cv.pages.project.index'))->name('project');
    Route::get('/semboyan_cantik', fn() => view('cv.pages.semboyan_cantik.index'))->name('semboyan_cantik');
    Route::get('/mps', fn() => view('cv.pages.mps.index'))->name('mps');
    Route::get('/sipp', fn() => view('cv.pages.sipp.index'))->name('sipp');
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
        Route::get('/log-barang', [\App\Http\Controllers\Admin\LogBarangController::class, 'index'])->name('log_barang');
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
