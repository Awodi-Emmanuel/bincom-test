<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\LgaController;
use App\Http\Controllers\LgaResultController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\PollingunitController;
use App\Http\Controllers\PuResultController;
use App\Http\Controllers\StateResultController;
use App\Http\Controllers\WardController;
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

Route::get('/', function () {
    return view('layouts.main');
});

// LGA Routes
Route::get('state/lga/ward/{id}', [LgaController::class, 'getWardByLGAId']);
Route::get('state/lga/{id}', [LgaController::class, 'getLGAByStateId']);
Route::get('lga/{id}', [LgaController::class, 'getLgaById']);
Route::resource('/lga', LgaController::class);

// Polling Unit Routes
Route::get('pollingunit/lga/{id}', [PollingunitController::class, 'getPUByLGAId']);
Route::get('pollingunit/result/{id}', [PollingunitController::class, 'AllPUResultsByLGAID']);
Route::post('pollingunits', [PollingunitController::class, 'store']);
Route::get('pollingunits/{id}', [PollingunitController::class, 'show']);
Route::resource('pollingunits', PollingunitController::class);

Route::resource('/party', PartyController::class);
Route::resource('/agent', AgentController::class);
Route::resource('/lga/result', LgaResultController::class);

// Party Result Route for  and retreving
Route::get('announcedpuresults/{id}', [PuResultController::class, 'show']);
Route::post('newPollingunit', [PuResultController::class, 'create']);
Route::resource('announcedpuresults', PuResultController::class);

// State Routes
Route::resource('/state', StateResultController::class);

// Ward Routes
Route::get('/ward', [WardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
