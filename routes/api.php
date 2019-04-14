<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List rezervari
Route::get('rezervari', 'RezervareController@index');

// List single rezervare
Route::get('rezervare/{id}', 'RezervareController@show');

// Create new rezervare
Route::post('rezervare', 'RezervareController@store');

// Update rezervare
Route::put('rezervare', 'RezervareController@store');

// Delete rezervare
Route::delete('rezervare/{id}', 'RezervareController@destroy');