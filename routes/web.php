<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RencanaController;
use App\Http\Controllers\UnitController;
use App\Models\Rencana;
use App\Models\Timeline;
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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
        'part' => 'Rencana Kerja Audit'
    ]);
})->middleware('auth');

Route::resource('/unit', UnitController::class)->middleware('auth');
Route::resource('/barang', BarangController::class)->middleware('auth');
Route::resource('/rencana', RencanaController::class)->middleware('auth');


Route::get('/timeline/{id}', function($id){
    return view('timeline',[
        'title' => 'Timeline',
        'timeline' => Timeline::where('rencana_id', $id)->get(),
        'rencana' => Rencana::where('id', $id)->get()
    ]);
});