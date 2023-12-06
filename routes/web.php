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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\GuzzleRequestController::class, 'index'])->name('home');

Route::namespace('App\Http\Controllers')->group(function () {
    Route::resource('/', GuzzleRequestController::class);

    Route::get('/play/{contentid}', 'GuzzleRequestController@show')->name('play.home');

    Route::get('/play', 'GuzzleRequestController@showAll')->name('play.home');


});