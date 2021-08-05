<?php

use App\Http\Controllers\WardController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\LgaResultController;
use App\Http\Controllers\PuResultController;
use App\Http\Controllers\StateResultController;
use App\Http\Controllers\WardResultController;
use App\Http\Controllers\LgaController;
use App\Http\Controllers\PollingunitController;
use App\Http\Controllers\PartyController;
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

Route::resource('/ward', WardController::class);
Route::resource('/states', StateController::class);
Route::resource('/lga', LgaController::class);
Route::resource('/party', PartyController::class);
Route::resource('/agent', AgentController::class);
Route::resource('/lga/result', LgaResultController::class);
Route::resource('pollingunitresults', PuResultController::class);
Route::resource('pollingunit', PollingunitController::class);
Route::resource('/state/result', StateResultController::class);
Route::resource('/ward/result', WardResultController::class);

Route::get('/ward', [WardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
