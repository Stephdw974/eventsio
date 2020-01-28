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

Route::get('/events', 'ApiController@getEvents');
Route::get('/event/{Evenement}', 'ApiController@getEvent');
Route::get('/event/{Evenement}/sessions', 'ApiController@getEventSessions');
Route::get('/event/{Evenement}/session/{Session}', 'ApiController@getEventSession');
Route::get('/qr/{QR_Data}', 'ApiController@scanQrCode');
 