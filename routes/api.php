<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-common', 'CommonController@indexPeroson');


Route::group(['prefix' => 'person'], function () {
    Route::post('save-person', 'PersonController@save');
    Route::post('get-person', 'PersonController@select');
    Route::post('get-person-one', 'PersonController@selectOne');
});

Route::group(['prefix' => 'report'], function () {
    Route::post('get-general', 'ReportController@getReportGeneral');
    Route::get('get-ubicacion', 'ReportController@getUbicacion');
});
