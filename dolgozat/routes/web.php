<?php

use App\Http\Controllers\AgencyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/agency', [AgencyController::class, 'index']);
Route::get('/api/agency/{id}', [AgencyController::class, 'show']);
Route::put('/api/agency/{id}', [AgencyController::class, 'update']);
Route::post('/api/agency', [AgencyController::class, 'store']);
Route::delete('/api/agency/{id}', [AgencyController::class, 'destroy']);

Route::get('/agency/new', [AgencyController::class, 'newView']);
Route::get('/agency/edit/{id}', [AgencyController::class, 'editView']);
Route::get('/agency/list', [AgencyController::class, 'listView']);
