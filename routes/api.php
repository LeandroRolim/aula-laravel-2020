<?php

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

Route::get('/', function () {
    return 'hello';
});

Route::get('/people', 'PersonController@index');
Route::post('/people', 'PersonController@store');
Route::put('/people/{person}', 'PersonController@update');
Route::delete('/people/{person}', 'PersonController@delete');
