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
Route::get('states/lga/ward/{id}', [LgaController::class, 'getWardByLGAId']);
Route::get('states/lga/{id}', [LgaController::class, 'getLGAByStateId']);
Route::get('lga/{id}', [LgaController::class, 'getLgaById']);
Route::resource('/lga', LgaController::class);

// Polling Unit Routes
Route::get('pollingunits/lga/{id}', [PollingunitController::class, 'getPUByLGAId']);
Route::get('pollingunits/result/{id}', [PollingunitController::class, 'AllPUResultsByLGAID'])->name('pollingunits');

Route::post('/pollingunits', [PollingunitController::class, 'store']);
Route::get('pollingunits/{id}', [PollingunitController::class, 'show']);
Route::resource('pollingunits', PollingunitController::class);

Route::resource('/party', PartyController::class);
Route::resource('/agent', AgentController::class);
Route::post('announcedlgaresults', [LgaResultController::class, 'store']);
Route::get('announcedlgaresults', [LgaResultController::class, 'index']);
Route::resource('/lga/result', LgaResultController::class);





// Party Result Route for  and retreving
// Route::resource('newpollingunits', PuResultController::class);
// Route::get('newpollingunits', [PuResultController::class, 'store']);
Route::get('announcedpuresults/{id}', [PuResultController::class, 'show']);
// Route::post('announcedpuresults', PuResultController::class, 'StoreNewResult');
Route::resource('announcedpuresults', PuResultController::class);

// State Routes
Route::resource('/state', StateResultController::class);

// Ward Routes
Route::get('/ward', [WardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
