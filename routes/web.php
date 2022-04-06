<?php

use Carbon\Carbon;
use App\Models\Desk;
use App\Models\User;
use App\Models\Visit;
use App\Models\Berita;
use App\Models\Rencana;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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

Route::resource('/user', UserController::class);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
        'part' => 'Rencana Kerja Audit'
    ]);
})->middleware('auth');

Route::resource('/unit', UnitController::class)->middleware('auth');
Route::resource('/barang', BarangController::class)->middleware('auth');
Route::resource('/rencana', RencanaController::class)->middleware('auth');
Route::resource('/desk', DeskController::class);

// Route::get('/desk/{desk}', function ($desk) {
//     return view('desk.index', [
//         'title' => 'Data Desk',
//         'desk' => $desk
//     ]);
// });

Route::get('/timeline/{id}', function ($id) {
    $data['title'] = 'Timeline';
    $rencana = Rencana::where('id', $id)->first();
    $data['timeline'] =  Timeline::where('rencana_id', $id)->first();
    $desk = Desk::where('rencana_id', $rencana->id)->first();
    $data['desk'] = $desk;
    $data['visit'] = '';

    if ($desk) {
        $visit = Visit::where('desk_id', $desk->id)->first();
        $data['visit'] = $visit;
        if($visit){
            $berita = Berita::where('visit_id', $visit->id)->first();
            $data['berita'] = $berita;
        }
    }

    return view('timeline', $data);

    // return view('desk.index', [
    //     'title' => 'Data Desk',
    //     'rencana' => $rencana,
    //     'desk' => $desk
    // ]);
});

Route::get('/timeline/desk/{id}', function ($id) {
    return view('desk.index', [
        'title' => 'Data Desk',
        'rencana' => Rencana::where('id', $id)->first()
    ]);
});

Route::get('/timeline/visit/{id}', function ($id) {
    return view('visit.index', [
        'title' => 'Data Visit',
        'rencana' => Rencana::where('id', $id)->first(),
    ]);
});

Route::get('/desk/print/{id}', [DeskController::class, 'print']);

Route::resource('/visit', VisitController::class);

Route::get('/visit/print/{id}', [VisitController::class, 'print']);

Route::post('/rencana/confirm/{id}', function ($id, Request $request) {

    // dd($request);
    $rules = [
        'visit_id' => 'required',
        'status' => 'required',
    ];

    $validatedData = $request->validate($rules);

    $validatedData['tanggal'] = Carbon::now('Asia/Jakarta');

    DB::beginTransaction();
    $berita = Berita::create($validatedData);
    Rencana::findOrFail($id)->update(['status' => 'Terlaksana']);
    Timeline::where('rencana_id', $id)->update(['berita_id' => $berita->id]);
    DB::commit();

    return redirect('/timeline/' . $id)->with('success', 'Data Audit berhasil dikonfirmasi!');
});

Route::get('/berita/{id}', [BeritaController::class, 'print']);

Route::get('/profile', [DashboardController::class, 'index']);
Route::put('/profile/update/{id}', [DashboardController::class, 'profileUpdate']);
Route::put('/profile/passwordUpdate/{id}', [DashboardController::class, 'passwordUpdate']);
Route::put('/profile/photoUpdate/{id}', [DashboardController::class, 'photoUpdate']);
Route::put('/profile/ttdUpdate/{id}', [DashboardController::class, 'ttdUpdate']);
