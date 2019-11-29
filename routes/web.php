<?php

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
    return view('welcome');
});

Route::get('api/bitcoin-api', 'ApiController@getbitcoindata');
Route::get('api/zcash-api', 'ApiController@getzcashdata');
Route::get('api/zcash-json', 'ApiController@getzcashjson');
Route::get('api/bitcoin-json', 'ApiController@getbitcoinjson');
