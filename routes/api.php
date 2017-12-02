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


Route::resource('users','UsersController');
Route::get('store/create','storeController@create');
Route::post('store/insert','storeController@insert');
Route::get('store/update','storeController@update');


Route::get('point/create','PointController@create');
Route::post('point/insert','PointController@insert');
Route::get('point/update','PointController@update');


Route::get('partner/create','PartnerController@create');
Route::post('partner/insert','PartnerController@insert');
Route::get('partner/update','PartnerController@update');


Route::get('account/create','AccountController@create');
Route::post('account/insert','AccountController@insert');
Route::get('account/update','AccountController@update');

Route::get('wallet/create','WalletController@create');
Route::post('wallet/insert','WalletController@insert');
Route::get('wallet/update','WalletController@update');

