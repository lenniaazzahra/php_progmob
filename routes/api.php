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

Route::middleware('auth:api')->group(function(){
    Route::post('/user','userController@index');
});

Route::post('register','registerController@index');
Route::post('login','LoginController@index');
Route::get('indexadver','AdvertisementController@index');
Route::get('readadver','AdvertisementController@read');
Route::post('addadver','AdvertisementController@create');
Route::post('updateadver','AdvertisementController@store');
Route::delete('delete','AdvertisementController@delete');
