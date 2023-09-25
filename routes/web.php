<?php

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
use App\Http\Controllers\OsController;

Route::get('/', [OsController::class, 'index']);
Route::get('/ordens/create', [OsController::class, 'create'])->middleware('auth');
Route::get('/ordens/{id}', [OsController::class, 'show']);
Route::post('/ordens', [OsController::class, 'store']);
Route::delete('/ordens/{id}', [OsController::class, 'destroy'])->middleware('auth');
Route::get('/ordens/edit/{id}', [OsController::class, 'edit'])->middleware('auth');
Route::put('/ordens/update/{id}', [OsController::class, 'update'])->middleware('auth');


Route::get('/dashboard', [OsController::class, 'dashboard'])->middleware('auth');
Route::get('/os', function () {
    return view('os');
});


