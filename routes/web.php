<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\RKAController;
use App\Http\Controllers\unitController;
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

Route::get('/', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
        'part' => 'Rencana Kerja Audit'
    ]);
})->middleware('auth');

Route::get('/rka', [RKAController::class, 'index'])->middleware('auth');
Route::resource('/unit', unitController::class)->middleware('auth');
