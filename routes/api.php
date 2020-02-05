<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/events', 'ApiController@getEvents');
Route::get('/event/{Evenement}', 'ApiController@getEvent');
Route::get('/event/{Evenement}/sessions', 'ApiController@getEventSessions');
Route::get('/event/{Evenement}/session/{Session}', 'ApiController@getEventSession');
Route::get('/event/{Evenement}/session/{Session}/participations', 'ApiController@getParticipations');
Route::get('/event/{Evenement}/session/{Session}/participation/{Participation}', 'ApiController@getParticipationUser');
Route::get('/qr/{QR_Data}', 'ApiController@scanQrCode');
Route::post('/auth/{email}/{password}', 'ApiController@authUser');