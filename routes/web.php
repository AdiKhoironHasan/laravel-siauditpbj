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
use App\Http\Controllers\KerjaDeskController;
use App\Http\Controllers\KerjaVisitController;
use App\Models\KerjaDesk;
use Illuminate\Http\Request;
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
        // Route::get('/rencana/timeline/desk/create/{id}', [TimelineController::class, 'desk']);
        // Route::get('/rencana/timeline/visit/create/{id}', [TimelineController::class, 'visit']);
    });

    Route::resource('/unit', UnitController::class);


    Route::middleware('auditor')->group(function () {
        Route::get('/rencana/timeline/kerjadesk/create/{id}', [TimelineController::class, 'kerjaDesk']);
        Route::get('/rencana/timeline/kerjavisit/create/{id}', [TimelineController::class, 'kerjaVisit']);
        Route::get('/rencana/timeline/desk/create/{id}', [DeskController::class, 'generate']);
        Route::get('/rencana/timeline/visit/create/{id}', [TimelineController::class, 'visit']);
    });

    Route::post('/rencana/timeline/desk/confirm/{id}', [TimelineController::class, 'confirmDesk']);

    Route::middleware('auditee')->group(function () {
        Route::resource('/barang', BarangController::class);
        Route::post('/rencana/timeline/confirm/{id}', [TimelineController::class, 'confirm']);
    });

    Route::resource('/rencana', RencanaController::class);
    Route::get('/rencana/timeline/{id}', [TimelineController::class, 'show']);

    Route::resource('/rencana/timeline/kerjadesk', KerjaDeskController::class);
    Route::resource('/rencana/timeline/kerjavisit', KerjaVisitController::class);

    Route::resource('/rencana/timeline/desk', DeskController::class); //update hanya auditor
    Route::get('/rencana/timeline/desk/print/{id}', [DeskController::class, 'print']);

    Route::resource('/rencana/timeline/visit', VisitController::class);
    Route::get('/rencana/timeline/visit/print/{id}', [VisitController::class, 'print']);

    Route::get('/rencana/timeline/berita/{id}', [BeritaController::class, 'print']);

    // hanya auditee
});

// Route::get('/rencana/timeline/kerjadesk/create', function () {

// });

// Route::post('/kerjadesk/hasil', function (Request $request) {

//     // dd($request->all());
//     // $data = $request->validate();
//     KerjaDesk::create($request->except(['rencana_id', '_token']));
// });
