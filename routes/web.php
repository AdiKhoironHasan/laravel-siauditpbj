<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeskController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RencanaController;
use App\Http\Controllers\TimelineController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'home']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/profile', [DashboardController::class, 'profile']);
    Route::put('/profile/update/{id}', [DashboardController::class, 'profileUpdate']);
    Route::put('/profile/passwordUpdate/{id}', [DashboardController::class, 'passwordUpdate']);
    Route::put('/profile/photoUpdate/{id}', [DashboardController::class, 'photoUpdate']);
    Route::put('/profile/ttdUpdate/{id}', [DashboardController::class, 'ttdUpdate']);

    Route::middleware('admin')->group(function () {
        Route::resource('/user', UserController::class);
        Route::resource('/unit', UnitController::class);
    });

    Route::resource('/rencana', RencanaController::class);
    Route::resource('/desk', DeskController::class);
    Route::get('/desk/print/{id}', [DeskController::class, 'print']);
    Route::resource('/visit', VisitController::class);
    Route::get('/visit/print/{id}', [VisitController::class, 'print']);
    Route::get('/berita/{id}', [BeritaController::class, 'print']);
    Route::post('/rencana/confirm/{id}', [TimelineController::class, 'confirm']);
    Route::get('/timeline/{id}', [TimelineController::class, 'show']);
    Route::get('/timeline/desk/{id}', [TimelineController::class, 'desk']);
    Route::get('/timeline/visit/{id}', [TimelineController::class, 'visit']);

    Route::middleware('auditee')->group(function () {
        Route::resource('/barang', BarangController::class);
    });
});
